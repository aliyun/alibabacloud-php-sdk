<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ModelDTO extends Model
{
    /**
     * @var string
     */
    public $apiKeyPreview;

    /**
     * @var string
     */
    public $baseUrl;

    /**
     * @var int
     */
    public $deleteTag;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $isCustom;

    /**
     * @var string
     */
    public $maxInputLength;

    /**
     * @var string
     */
    public $maxOutputLength;

    /**
     * @var string
     */
    public $modelCode;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $symbol;

    /**
     * @var string
     */
    public $tagNames;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'apiKeyPreview' => 'apiKeyPreview',
        'baseUrl' => 'baseUrl',
        'deleteTag' => 'deleteTag',
        'description' => 'description',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'id' => 'id',
        'isCustom' => 'isCustom',
        'maxInputLength' => 'maxInputLength',
        'maxOutputLength' => 'maxOutputLength',
        'modelCode' => 'modelCode',
        'modelType' => 'modelType',
        'name' => 'name',
        'symbol' => 'symbol',
        'tagNames' => 'tagNames',
        'tags' => 'tags',
        'version' => 'version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeyPreview) {
            $res['apiKeyPreview'] = $this->apiKeyPreview;
        }

        if (null !== $this->baseUrl) {
            $res['baseUrl'] = $this->baseUrl;
        }

        if (null !== $this->deleteTag) {
            $res['deleteTag'] = $this->deleteTag;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->isCustom) {
            $res['isCustom'] = $this->isCustom;
        }

        if (null !== $this->maxInputLength) {
            $res['maxInputLength'] = $this->maxInputLength;
        }

        if (null !== $this->maxOutputLength) {
            $res['maxOutputLength'] = $this->maxOutputLength;
        }

        if (null !== $this->modelCode) {
            $res['modelCode'] = $this->modelCode;
        }

        if (null !== $this->modelType) {
            $res['modelType'] = $this->modelType;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->symbol) {
            $res['symbol'] = $this->symbol;
        }

        if (null !== $this->tagNames) {
            $res['tagNames'] = $this->tagNames;
        }

        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['apiKeyPreview'])) {
            $model->apiKeyPreview = $map['apiKeyPreview'];
        }

        if (isset($map['baseUrl'])) {
            $model->baseUrl = $map['baseUrl'];
        }

        if (isset($map['deleteTag'])) {
            $model->deleteTag = $map['deleteTag'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['isCustom'])) {
            $model->isCustom = $map['isCustom'];
        }

        if (isset($map['maxInputLength'])) {
            $model->maxInputLength = $map['maxInputLength'];
        }

        if (isset($map['maxOutputLength'])) {
            $model->maxOutputLength = $map['maxOutputLength'];
        }

        if (isset($map['modelCode'])) {
            $model->modelCode = $map['modelCode'];
        }

        if (isset($map['modelType'])) {
            $model->modelType = $map['modelType'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['symbol'])) {
            $model->symbol = $map['symbol'];
        }

        if (isset($map['tagNames'])) {
            $model->tagNames = $map['tagNames'];
        }

        if (isset($map['tags'])) {
            $model->tags = $map['tags'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
