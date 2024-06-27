<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class DescribeVariableListRequest extends Model
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
    public $currentPage;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $refObjId;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $typesStr;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'lang'        => 'Lang',
        'createType'  => 'createType',
        'currentPage' => 'currentPage',
        'pageSize'    => 'pageSize',
        'refObjId'    => 'refObjId',
        'regId'       => 'regId',
        'sourceType'  => 'sourceType',
        'type'        => 'type',
        'typesStr'    => 'typesStr',
        'value'       => 'value',
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
        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->refObjId) {
            $res['refObjId'] = $this->refObjId;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }
        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->typesStr) {
            $res['typesStr'] = $this->typesStr;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVariableListRequest
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
        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['refObjId'])) {
            $model->refObjId = $map['refObjId'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }
        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['typesStr'])) {
            $model->typesStr = $map['typesStr'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
