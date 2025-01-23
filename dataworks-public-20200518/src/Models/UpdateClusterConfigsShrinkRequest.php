<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class UpdateClusterConfigsShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $clusterId;
    /**
     * @var string
     */
    public $configType;
    /**
     * @var string
     */
    public $configValuesShrink;
    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'clusterId'          => 'ClusterId',
        'configType'         => 'ConfigType',
        'configValuesShrink' => 'ConfigValues',
        'projectId'          => 'ProjectId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }

        if (null !== $this->configValuesShrink) {
            $res['ConfigValues'] = $this->configValuesShrink;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }

        if (isset($map['ConfigValues'])) {
            $model->configValuesShrink = $map['ConfigValues'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
