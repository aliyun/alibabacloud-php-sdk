<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models;

use AlibabaCloud\SDK\RAI\V20240701\Models\BatchContentSyncDetectRequest\serviceParameterList;
use AlibabaCloud\Tea\Model;

class BatchContentSyncDetectRequest extends Model
{
    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example ""
     *
     * @var string
     */
    public $sceneName;

    /**
     * @example textDetection
     * imageDetection
     * @var string
     */
    public $serviceName;

    /**
     * @var serviceParameterList[]
     */
    public $serviceParameterList;
    protected $_name = [
        'regionId'             => 'RegionId',
        'sceneName'            => 'SceneName',
        'serviceName'          => 'ServiceName',
        'serviceParameterList' => 'serviceParameterList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->serviceParameterList) {
            $res['serviceParameterList'] = [];
            if (null !== $this->serviceParameterList && \is_array($this->serviceParameterList)) {
                $n = 0;
                foreach ($this->serviceParameterList as $item) {
                    $res['serviceParameterList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchContentSyncDetectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['serviceParameterList'])) {
            if (!empty($map['serviceParameterList'])) {
                $model->serviceParameterList = [];
                $n                           = 0;
                foreach ($map['serviceParameterList'] as $item) {
                    $model->serviceParameterList[$n++] = null !== $item ? serviceParameterList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
