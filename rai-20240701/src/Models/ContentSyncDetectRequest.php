<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models;

use AlibabaCloud\SDK\RAI\V20240701\Models\ContentSyncDetectRequest\serviceParameter;
use AlibabaCloud\Tea\Model;

class ContentSyncDetectRequest extends Model
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
     *
     * @var string
     */
    public $serviceName;

    /**
     * @var serviceParameter
     */
    public $serviceParameter;
    protected $_name = [
        'regionId'         => 'RegionId',
        'sceneName'        => 'SceneName',
        'serviceName'      => 'ServiceName',
        'serviceParameter' => 'serviceParameter',
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
        if (null !== $this->serviceParameter) {
            $res['serviceParameter'] = null !== $this->serviceParameter ? $this->serviceParameter->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ContentSyncDetectRequest
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
        if (isset($map['serviceParameter'])) {
            $model->serviceParameter = serviceParameter::fromMap($map['serviceParameter']);
        }

        return $model;
    }
}
