<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ManageRecordingRuleRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $queryUserId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $ruleYaml;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'queryUserId' => 'QueryUserId',
        'regionId'    => 'RegionId',
        'ruleYaml'    => 'RuleYaml',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->queryUserId) {
            $res['QueryUserId'] = $this->queryUserId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ruleYaml) {
            $res['RuleYaml'] = $this->ruleYaml;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ManageRecordingRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['QueryUserId'])) {
            $model->queryUserId = $map['QueryUserId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RuleYaml'])) {
            $model->ruleYaml = $map['RuleYaml'];
        }

        return $model;
    }
}
