<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models;

use AlibabaCloud\Dara\Model;

class UpdateMmAppRagConfigRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $promptStrategy;

    /**
     * @var int
     */
    public $retrieveMaxLength;

    /**
     * @var int
     */
    public $topK;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId' => 'AppId',
        'promptStrategy' => 'PromptStrategy',
        'retrieveMaxLength' => 'RetrieveMaxLength',
        'topK' => 'TopK',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->promptStrategy) {
            $res['PromptStrategy'] = $this->promptStrategy;
        }

        if (null !== $this->retrieveMaxLength) {
            $res['RetrieveMaxLength'] = $this->retrieveMaxLength;
        }

        if (null !== $this->topK) {
            $res['TopK'] = $this->topK;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['PromptStrategy'])) {
            $model->promptStrategy = $map['PromptStrategy'];
        }

        if (isset($map['RetrieveMaxLength'])) {
            $model->retrieveMaxLength = $map['RetrieveMaxLength'];
        }

        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
