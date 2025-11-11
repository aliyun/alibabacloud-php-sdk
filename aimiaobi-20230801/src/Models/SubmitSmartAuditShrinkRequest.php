<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class SubmitSmartAuditShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $imageUrlListShrink;

    /**
     * @var string
     */
    public $noteId;

    /**
     * @var string
     */
    public $subCodesShrink;

    /**
     * @var string
     */
    public $termsName;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $imageUrlsShrink;
    protected $_name = [
        'imageUrlListShrink' => 'ImageUrlList',
        'noteId' => 'NoteId',
        'subCodesShrink' => 'SubCodes',
        'termsName' => 'TermsName',
        'text' => 'Text',
        'workspaceId' => 'WorkspaceId',
        'imageUrlsShrink' => 'imageUrls',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageUrlListShrink) {
            $res['ImageUrlList'] = $this->imageUrlListShrink;
        }

        if (null !== $this->noteId) {
            $res['NoteId'] = $this->noteId;
        }

        if (null !== $this->subCodesShrink) {
            $res['SubCodes'] = $this->subCodesShrink;
        }

        if (null !== $this->termsName) {
            $res['TermsName'] = $this->termsName;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        if (null !== $this->imageUrlsShrink) {
            $res['imageUrls'] = $this->imageUrlsShrink;
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
        if (isset($map['ImageUrlList'])) {
            $model->imageUrlListShrink = $map['ImageUrlList'];
        }

        if (isset($map['NoteId'])) {
            $model->noteId = $map['NoteId'];
        }

        if (isset($map['SubCodes'])) {
            $model->subCodesShrink = $map['SubCodes'];
        }

        if (isset($map['TermsName'])) {
            $model->termsName = $map['TermsName'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        if (isset($map['imageUrls'])) {
            $model->imageUrlsShrink = $map['imageUrls'];
        }

        return $model;
    }
}
