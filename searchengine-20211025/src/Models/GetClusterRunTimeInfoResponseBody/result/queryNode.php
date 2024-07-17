<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponseBody\result;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponseBody\result\queryNode\configStatusList;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponseBody\result\queryNode\serviceStatus;
use AlibabaCloud\Tea\Model;

class queryNode extends Model
{
    /**
     * @description The configuration status.
     *
     * @var configStatusList[]
     */
    public $configStatusList;

    /**
     * @description The service status of the QRS worker.
     *
     * @var serviceStatus
     */
    public $serviceStatus;
    protected $_name = [
        'configStatusList' => 'configStatusList',
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
        if (null !== $this->serviceStatus) {
            $res['serviceStatus'] = null !== $this->serviceStatus ? $this->serviceStatus->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queryNode
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
        if (isset($map['serviceStatus'])) {
            $model->serviceStatus = serviceStatus::fromMap($map['serviceStatus']);
        }

        return $model;
    }
}
