<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

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
     * @description This parameter is required.
     *
     * @var string
     */
    public $refObjId;

    /**
     * @description This parameter is required.
     *
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
        'lang'       => 'Lang',
        'createType' => 'createType',
        'filterDTO'  => 'filterDTO',
        'refObjId'   => 'refObjId',
        'refObjType' => 'refObjType',
        'regId'      => 'regId',
        'type'       => 'type',
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

    /**
     * @param array $map
     *
     * @return DescribeEventVariableListRequest
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
