<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class ListMaterialDocumentsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;
    /**
     * @var string
     */
    public $content;
    /**
     * @var string
     */
    public $createTimeEnd;
    /**
     * @var string
     */
    public $createTimeStart;
    /**
     * @var int
     */
    public $current;
    /**
     * @var string
     */
    public $docType;
    /**
     * @var string
     */
    public $docTypeListShrink;
    /**
     * @var bool
     */
    public $generatePublicUrl;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $keywordsShrink;
    /**
     * @var string
     */
    public $query;
    /**
     * @var int
     */
    public $shareAttr;
    /**
     * @var int
     */
    public $size;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $updateTimeEnd;
    /**
     * @var string
     */
    public $updateTimeStart;
    protected $_name = [
        'agentKey'          => 'AgentKey',
        'content'           => 'Content',
        'createTimeEnd'     => 'CreateTimeEnd',
        'createTimeStart'   => 'CreateTimeStart',
        'current'           => 'Current',
        'docType'           => 'DocType',
        'docTypeListShrink' => 'DocTypeList',
        'generatePublicUrl' => 'GeneratePublicUrl',
        'id'                => 'Id',
        'keywordsShrink'    => 'Keywords',
        'query'             => 'Query',
        'shareAttr'         => 'ShareAttr',
        'size'              => 'Size',
        'title'             => 'Title',
        'updateTimeEnd'     => 'UpdateTimeEnd',
        'updateTimeStart'   => 'UpdateTimeStart',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->createTimeEnd) {
            $res['CreateTimeEnd'] = $this->createTimeEnd;
        }

        if (null !== $this->createTimeStart) {
            $res['CreateTimeStart'] = $this->createTimeStart;
        }

        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }

        if (null !== $this->docType) {
            $res['DocType'] = $this->docType;
        }

        if (null !== $this->docTypeListShrink) {
            $res['DocTypeList'] = $this->docTypeListShrink;
        }

        if (null !== $this->generatePublicUrl) {
            $res['GeneratePublicUrl'] = $this->generatePublicUrl;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->keywordsShrink) {
            $res['Keywords'] = $this->keywordsShrink;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->shareAttr) {
            $res['ShareAttr'] = $this->shareAttr;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->updateTimeEnd) {
            $res['UpdateTimeEnd'] = $this->updateTimeEnd;
        }

        if (null !== $this->updateTimeStart) {
            $res['UpdateTimeStart'] = $this->updateTimeStart;
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
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['CreateTimeEnd'])) {
            $model->createTimeEnd = $map['CreateTimeEnd'];
        }

        if (isset($map['CreateTimeStart'])) {
            $model->createTimeStart = $map['CreateTimeStart'];
        }

        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }

        if (isset($map['DocType'])) {
            $model->docType = $map['DocType'];
        }

        if (isset($map['DocTypeList'])) {
            $model->docTypeListShrink = $map['DocTypeList'];
        }

        if (isset($map['GeneratePublicUrl'])) {
            $model->generatePublicUrl = $map['GeneratePublicUrl'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Keywords'])) {
            $model->keywordsShrink = $map['Keywords'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['ShareAttr'])) {
            $model->shareAttr = $map['ShareAttr'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['UpdateTimeEnd'])) {
            $model->updateTimeEnd = $map['UpdateTimeEnd'];
        }

        if (isset($map['UpdateTimeStart'])) {
            $model->updateTimeStart = $map['UpdateTimeStart'];
        }

        return $model;
    }
}
