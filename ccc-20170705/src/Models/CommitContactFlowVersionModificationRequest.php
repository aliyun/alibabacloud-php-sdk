<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class CommitContactFlowVersionModificationRequest extends Model
{
    /**
     * @var string
     */
    public $canvas;

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
    protected $_name = [
        'canvas'               => 'Canvas',
        'contactFlowVersionId' => 'ContactFlowVersionId',
        'content'              => 'Content',
        'instanceId'           => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canvas) {
            $res['Canvas'] = $this->canvas;
        }
        if (null !== $this->contactFlowVersionId) {
            $res['ContactFlowVersionId'] = $this->contactFlowVersionId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['Canvas'])) {
            $model->canvas = $map['Canvas'];
        }
        if (isset($map['ContactFlowVersionId'])) {
            $model->contactFlowVersionId = $map['ContactFlowVersionId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
