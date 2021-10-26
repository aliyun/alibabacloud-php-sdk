<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateGroupConfigSynFlowRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var int
     */
    public $flowVersion;

    /**
     * @var string
     */
    public $sourceGroupId;

    /**
     * @var string
     */
    public $targetGroupId;

    /**
     * @var string
     */
    public $apiSynVersion;

    /**
     * @var string
     */
    public $sourceGroupRegion;
    protected $_name = [
        'securityToken'     => 'SecurityToken',
        'flowVersion'       => 'FlowVersion',
        'sourceGroupId'     => 'SourceGroupId',
        'targetGroupId'     => 'TargetGroupId',
        'apiSynVersion'     => 'ApiSynVersion',
        'sourceGroupRegion' => 'SourceGroupRegion',
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
        if (null !== $this->flowVersion) {
            $res['FlowVersion'] = $this->flowVersion;
        }
        if (null !== $this->sourceGroupId) {
            $res['SourceGroupId'] = $this->sourceGroupId;
        }
        if (null !== $this->targetGroupId) {
            $res['TargetGroupId'] = $this->targetGroupId;
        }
        if (null !== $this->apiSynVersion) {
            $res['ApiSynVersion'] = $this->apiSynVersion;
        }
        if (null !== $this->sourceGroupRegion) {
            $res['SourceGroupRegion'] = $this->sourceGroupRegion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGroupConfigSynFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['FlowVersion'])) {
            $model->flowVersion = $map['FlowVersion'];
        }
        if (isset($map['SourceGroupId'])) {
            $model->sourceGroupId = $map['SourceGroupId'];
        }
        if (isset($map['TargetGroupId'])) {
            $model->targetGroupId = $map['TargetGroupId'];
        }
        if (isset($map['ApiSynVersion'])) {
            $model->apiSynVersion = $map['ApiSynVersion'];
        }
        if (isset($map['SourceGroupRegion'])) {
            $model->sourceGroupRegion = $map['SourceGroupRegion'];
        }

        return $model;
    }
}
