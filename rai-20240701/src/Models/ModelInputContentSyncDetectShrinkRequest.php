<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models;

use AlibabaCloud\Dara\Model;

class ModelInputContentSyncDetectShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $bodyDataShrink;

    /**
     * @var string
     */
    public $policyIdentifier;

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
    protected $_name = [
        'bodyDataShrink' => 'BodyData',
        'policyIdentifier' => 'PolicyIdentifier',
        'regionId' => 'RegionId',
        'sceneName' => 'SceneName',
        'serviceName' => 'ServiceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bodyDataShrink) {
            $res['BodyData'] = $this->bodyDataShrink;
        }

        if (null !== $this->policyIdentifier) {
            $res['PolicyIdentifier'] = $this->policyIdentifier;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
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
        if (isset($map['BodyData'])) {
            $model->bodyDataShrink = $map['BodyData'];
        }

        if (isset($map['PolicyIdentifier'])) {
            $model->policyIdentifier = $map['PolicyIdentifier'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
