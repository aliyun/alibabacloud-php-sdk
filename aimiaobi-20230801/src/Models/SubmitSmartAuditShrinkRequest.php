<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class SubmitSmartAuditShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $subCodesShrink;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'subCodesShrink' => 'SubCodes',
        'text' => 'Text',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subCodesShrink) {
            $res['SubCodes'] = $this->subCodesShrink;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
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
        if (isset($map['SubCodes'])) {
            $model->subCodesShrink = $map['SubCodes'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
