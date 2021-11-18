<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class CreateVoiceAppraiseRequest extends Model
{
    /**
     * @var string
     */
    public $contactFlowVersionId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $isAppraise;
    protected $_name = [
        'contactFlowVersionId' => 'ContactFlowVersionId',
        'content'              => 'Content',
        'instanceId'           => 'InstanceId',
        'isAppraise'           => 'IsAppraise',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactFlowVersionId) {
            $res['ContactFlowVersionId'] = $this->contactFlowVersionId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isAppraise) {
            $res['IsAppraise'] = $this->isAppraise;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVoiceAppraiseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactFlowVersionId'])) {
            $model->contactFlowVersionId = $map['ContactFlowVersionId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IsAppraise'])) {
            $model->isAppraise = $map['IsAppraise'];
        }

        return $model;
    }
}
