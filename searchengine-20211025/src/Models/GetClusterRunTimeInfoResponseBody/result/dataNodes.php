<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponseBody\result;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponseBody\result\dataNodes\configStatusList;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponseBody\result\dataNodes\dataStatusList;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponseBody\result\dataNodes\serviceStatus;
use AlibabaCloud\Tea\Model;

class dataNodes extends Model
{
    /**
     * @description The configuration status list.
     *
     * @var configStatusList[]
     */
    public $configStatusList;

    /**
     * @description The dataStatusList.
     *
     * @var dataStatusList[]
     */
    public $dataStatusList;

    /**
     * @description The service status.
     *
     * @var serviceStatus
     */
    public $serviceStatus;
    protected $_name = [
        'configStatusList' => 'configStatusList',
        'dataStatusList'   => 'dataStatusList',
        'serviceStatus'    => 'serviceStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configStatusList) {
            $res['configStatusList'] = [];
            if (null !== $this->configStatusList && \is_array($this->configStatusList)) {
                $n = 0;
                foreach ($this->configStatusList as $item) {
                    $res['configStatusList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dataStatusList) {
            $res['dataStatusList'] = [];
            if (null !== $this->dataStatusList && \is_array($this->dataStatusList)) {
                $n = 0;
                foreach ($this->dataStatusList as $item) {
                    $res['dataStatusList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->serviceStatus) {
            $res['serviceStatus'] = null !== $this->serviceStatus ? $this->serviceStatus->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['configStatusList'])) {
            if (!empty($map['configStatusList'])) {
                $model->configStatusList = [];
                $n                       = 0;
                foreach ($map['configStatusList'] as $item) {
                    $model->configStatusList[$n++] = null !== $item ? configStatusList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['dataStatusList'])) {
            if (!empty($map['dataStatusList'])) {
                $model->dataStatusList = [];
                $n                     = 0;
                foreach ($map['dataStatusList'] as $item) {
                    $model->dataStatusList[$n++] = null !== $item ? dataStatusList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['serviceStatus'])) {
            $model->serviceStatus = serviceStatus::fromMap($map['serviceStatus']);
        }

        return $model;
    }
}
