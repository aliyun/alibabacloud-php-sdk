<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RAI\V20240701\Models\ContentSyncDetectRequest\serviceParameter;

class ContentSyncDetectRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var serviceParameter
     */
    public $serviceParameter;
    protected $_name = [
        'regionId' => 'RegionId',
        'sceneName' => 'SceneName',
        'serviceName' => 'ServiceName',
        'serviceParameter' => 'serviceParameter',
    ];

    public function validate()
    {
        if (null !== $this->serviceParameter) {
            $this->serviceParameter->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['serviceParameter'] = null !== $this->serviceParameter ? $this->serviceParameter->toArray($noStream) : $this->serviceParameter;
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
