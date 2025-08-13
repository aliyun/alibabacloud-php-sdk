<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class DescribeEventVariableListRequest extends Model
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
    public $filterDTO;

    /**
     * @var string
     */
    public $refObjId;

    /**
     * @var string
     */
    public $refObjType;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'lang' => 'Lang',
        'createType' => 'createType',
        'filterDTO' => 'filterDTO',
        'refObjId' => 'refObjId',
        'refObjType' => 'refObjType',
        'regId' => 'regId',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->createType) {
            $res['createType'] = $this->createType;
        }

        if (null !== $this->filterDTO) {
            $res['filterDTO'] = $this->filterDTO;
        }

        if (null !== $this->refObjId) {
            $res['refObjId'] = $this->refObjId;
        }

        if (null !== $this->refObjType) {
            $res['refObjType'] = $this->refObjType;
        }

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['createType'])) {
            $model->createType = $map['createType'];
        }

        if (isset($map['filterDTO'])) {
            $model->filterDTO = $map['filterDTO'];
        }

        if (isset($map['refObjId'])) {
            $model->refObjId = $map['refObjId'];
        }

        if (isset($map['refObjType'])) {
            $model->refObjType = $map['refObjType'];
        }

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
