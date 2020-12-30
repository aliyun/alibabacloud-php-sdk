<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class CommitContactFlowVersionModificationRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $contactFlowVersionId;

    /**
     * @var string
     */
    public $canvas;

    /**
     * @var string
     */
    public $content;
    protected $_name = [
        'instanceId'           => 'InstanceId',
        'contactFlowVersionId' => 'ContactFlowVersionId',
        'canvas'               => 'Canvas',
        'content'              => 'Content',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->contactFlowVersionId) {
            $res['ContactFlowVersionId'] = $this->contactFlowVersionId;
        }
        if (null !== $this->canvas) {
            $res['Canvas'] = $this->canvas;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CommitContactFlowVersionModificationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ContactFlowVersionId'])) {
            $model->contactFlowVersionId = $map['ContactFlowVersionId'];
        }
        if (isset($map['Canvas'])) {
            $model->canvas = $map['Canvas'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
