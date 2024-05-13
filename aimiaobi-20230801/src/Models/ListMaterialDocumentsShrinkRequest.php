<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class ListMaterialDocumentsShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 33a2658aaabf4c24b45d50e575125311_p_beebot_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $content;

    /**
     * @example 2023-03-18 02:00:00
     *
     * @var string
     */
    public $createTimeEnd;

    /**
     * @example 2023-02-19 07:28:11
     *
     * @var string
     */
    public $createTimeStart;

    /**
     * @example 1
     *
     * @var int
     */
    public $current;

    /**
     * @example jsonLine
     *
     * @var string
     */
    public $docType;

    /**
     * @example excel
     *
     * @var string
     */
    public $docTypeListShrink;

    /**
     * @example true
     *
     * @var bool
     */
    public $generatePublicUrl;

    /**
     * @example 69
     *
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
     * @example 1
     *
     * @var int
     */
    public $shareAttr;

    /**
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $title;

    /**
     * @example 2023-03-18 03:00:00
     *
     * @var string
     */
    public $updateTimeEnd;

    /**
     * @example 2023-03-18 02:00:00
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ListMaterialDocumentsShrinkRequest
     */
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
