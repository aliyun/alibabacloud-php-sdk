<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeVarDiffBetweenGroupRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $targetGroupId;

    /**
     * @var string
     */
    public $sourceGroupId;

    /**
     * @var string
     */
    public $sourceRegionId;
    protected $_name = [
        'securityToken'  => 'SecurityToken',
        'targetGroupId'  => 'TargetGroupId',
        'sourceGroupId'  => 'SourceGroupId',
        'sourceRegionId' => 'SourceRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->targetGroupId) {
            $res['TargetGroupId'] = $this->targetGroupId;
        }
        if (null !== $this->sourceGroupId) {
            $res['SourceGroupId'] = $this->sourceGroupId;
        }
        if (null !== $this->sourceRegionId) {
            $res['SourceRegionId'] = $this->sourceRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVarDiffBetweenGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['TargetGroupId'])) {
            $model->targetGroupId = $map['TargetGroupId'];
        }
        if (isset($map['SourceGroupId'])) {
            $model->sourceGroupId = $map['SourceGroupId'];
        }
        if (isset($map['SourceRegionId'])) {
            $model->sourceRegionId = $map['SourceRegionId'];
        }

        return $model;
    }
}
