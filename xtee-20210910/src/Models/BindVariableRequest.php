<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class BindVariableRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $apiRegionId;

    /**
     * @var string
     */
    public $apiType;

    /**
     * @var string
     */
    public $createType;

    /**
     * @var string
     */
    public $defineId;

    /**
     * @var string
     */
    public $defineIds;

    /**
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $exceptionValue;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $outputField;

    /**
     * @var string
     */
    public $outputType;

    /**
     * @var string
     */
    public $params;

    /**
     * @var string
     */
    public $paramsList;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'lang'           => 'Lang',
        'apiRegionId'    => 'apiRegionId',
        'apiType'        => 'apiType',
        'createType'     => 'createType',
        'defineId'       => 'defineId',
        'defineIds'      => 'defineIds',
        'description'    => 'description',
        'eventCode'      => 'eventCode',
        'exceptionValue' => 'exceptionValue',
        'id'             => 'id',
        'outputField'    => 'outputField',
        'outputType'     => 'outputType',
        'params'         => 'params',
        'paramsList'     => 'paramsList',
        'regId'          => 'regId',
        'sourceType'     => 'sourceType',
        'title'          => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->apiRegionId) {
            $res['apiRegionId'] = $this->apiRegionId;
        }
        if (null !== $this->apiType) {
            $res['apiType'] = $this->apiType;
        }
        if (null !== $this->createType) {
            $res['createType'] = $this->createType;
        }
        if (null !== $this->defineId) {
            $res['defineId'] = $this->defineId;
        }
        if (null !== $this->defineIds) {
            $res['defineIds'] = $this->defineIds;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->eventCode) {
            $res['eventCode'] = $this->eventCode;
        }
        if (null !== $this->exceptionValue) {
            $res['exceptionValue'] = $this->exceptionValue;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->outputField) {
            $res['outputField'] = $this->outputField;
        }
        if (null !== $this->outputType) {
            $res['outputType'] = $this->outputType;
        }
        if (null !== $this->params) {
            $res['params'] = $this->params;
        }
        if (null !== $this->paramsList) {
            $res['paramsList'] = $this->paramsList;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }
        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindVariableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['apiRegionId'])) {
            $model->apiRegionId = $map['apiRegionId'];
        }
        if (isset($map['apiType'])) {
            $model->apiType = $map['apiType'];
        }
        if (isset($map['createType'])) {
            $model->createType = $map['createType'];
        }
        if (isset($map['defineId'])) {
            $model->defineId = $map['defineId'];
        }
        if (isset($map['defineIds'])) {
            $model->defineIds = $map['defineIds'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['eventCode'])) {
            $model->eventCode = $map['eventCode'];
        }
        if (isset($map['exceptionValue'])) {
            $model->exceptionValue = $map['exceptionValue'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['outputField'])) {
            $model->outputField = $map['outputField'];
        }
        if (isset($map['outputType'])) {
            $model->outputType = $map['outputType'];
        }
        if (isset($map['params'])) {
            $model->params = $map['params'];
        }
        if (isset($map['paramsList'])) {
            $model->paramsList = $map['paramsList'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }
        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
