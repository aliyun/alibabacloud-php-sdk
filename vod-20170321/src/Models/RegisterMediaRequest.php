<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class RegisterMediaRequest extends Model
{
    /**
     * @var string
     */
    public $registerMetadatas;

    /**
     * @var string
     */
    public $templateGroupId;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $workflowId;
    protected $_name = [
        'registerMetadatas' => 'RegisterMetadatas',
        'templateGroupId'   => 'TemplateGroupId',
        'userData'          => 'UserData',
        'workflowId'        => 'WorkflowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->registerMetadatas) {
            $res['RegisterMetadatas'] = $this->registerMetadatas;
        }
        if (null !== $this->templateGroupId) {
            $res['TemplateGroupId'] = $this->templateGroupId;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterMediaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegisterMetadatas'])) {
            $model->registerMetadatas = $map['RegisterMetadatas'];
        }
        if (isset($map['TemplateGroupId'])) {
            $model->templateGroupId = $map['TemplateGroupId'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}
