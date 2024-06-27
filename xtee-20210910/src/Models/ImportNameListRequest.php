<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class ImportNameListRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $createType;

    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $importType;

    /**
     * @var string
     */
    public $nameListType;

    /**
     * @var string
     */
    public $regId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $variableId;
    protected $_name = [
        'lang'         => 'Lang',
        'createType'   => 'createType',
        'data'         => 'data',
        'description'  => 'description',
        'importType'   => 'importType',
        'nameListType' => 'nameListType',
        'regId'        => 'regId',
        'title'        => 'title',
        'variableId'   => 'variableId',
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
        if (null !== $this->createType) {
            $res['createType'] = $this->createType;
        }
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->importType) {
            $res['importType'] = $this->importType;
        }
        if (null !== $this->nameListType) {
            $res['nameListType'] = $this->nameListType;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->variableId) {
            $res['variableId'] = $this->variableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportNameListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['createType'])) {
            $model->createType = $map['createType'];
        }
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['importType'])) {
            $model->importType = $map['importType'];
        }
        if (isset($map['nameListType'])) {
            $model->nameListType = $map['nameListType'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['variableId'])) {
            $model->variableId = $map['variableId'];
        }

        return $model;
    }
}
