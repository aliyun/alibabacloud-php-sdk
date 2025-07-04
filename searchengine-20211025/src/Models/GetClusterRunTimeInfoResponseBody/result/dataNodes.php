<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponseBody\result\dataNodes\configStatusList;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponseBody\result\dataNodes\dataStatusList;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponseBody\result\dataNodes\serviceStatus;

class dataNodes extends Model
{
    /**
     * @var configStatusList[]
     */
    public $configStatusList;

    /**
     * @var dataStatusList[]
     */
    public $dataStatusList;

    /**
     * @var serviceStatus
     */
    public $serviceStatus;
    protected $_name = [
        'configStatusList' => 'configStatusList',
        'dataStatusList' => 'dataStatusList',
        'serviceStatus' => 'serviceStatus',
    ];

    public function validate()
    {
        if (\is_array($this->configStatusList)) {
            Model::validateArray($this->configStatusList);
        }
        if (\is_array($this->dataStatusList)) {
            Model::validateArray($this->dataStatusList);
        }
        if (null !== $this->serviceStatus) {
            $this->serviceStatus->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configStatusList) {
            if (\is_array($this->configStatusList)) {
                $res['configStatusList'] = [];
                $n1 = 0;
                foreach ($this->configStatusList as $item1) {
                    $res['configStatusList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataStatusList) {
            if (\is_array($this->dataStatusList)) {
                $res['dataStatusList'] = [];
                $n1 = 0;
                foreach ($this->dataStatusList as $item1) {
                    $res['dataStatusList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serviceStatus) {
            $res['serviceStatus'] = null !== $this->serviceStatus ? $this->serviceStatus->toArray($noStream) : $this->serviceStatus;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['configStatusList'])) {
            if (!empty($map['configStatusList'])) {
                $model->configStatusList = [];
                $n1 = 0;
                foreach ($map['configStatusList'] as $item1) {
                    $model->configStatusList[$n1] = configStatusList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['dataStatusList'])) {
            if (!empty($map['dataStatusList'])) {
                $model->dataStatusList = [];
                $n1 = 0;
                foreach ($map['dataStatusList'] as $item1) {
                    $model->dataStatusList[$n1] = dataStatusList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['serviceStatus'])) {
            $model->serviceStatus = serviceStatus::fromMap($map['serviceStatus']);
        }

        return $model;
    }
}
