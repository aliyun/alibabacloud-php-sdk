<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class ModifyObjectGroupOperationRequest extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $comment;

    /**
     * @description This parameter is required.
     *
     * @example out
     *
     * @var string
     */
    public $direction;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $objectList;

    /**
     * @description This parameter is required.
     *
     * @example ignore
     *
     * @var string
     */
    public $objectOperation;

    /**
     * @description This parameter is required.
     *
     * @example destinationDomain
     *
     * @var string
     */
    public $objectType;

    /**
     * @example 123.xxx.251.60
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'comment'         => 'Comment',
        'direction'       => 'Direction',
        'lang'            => 'Lang',
        'objectList'      => 'ObjectList',
        'objectOperation' => 'ObjectOperation',
        'objectType'      => 'ObjectType',
        'sourceIp'        => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->objectList) {
            $res['ObjectList'] = $this->objectList;
        }
        if (null !== $this->objectOperation) {
            $res['ObjectOperation'] = $this->objectOperation;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyObjectGroupOperationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ObjectList'])) {
            if (!empty($map['ObjectList'])) {
                $model->objectList = $map['ObjectList'];
            }
        }
        if (isset($map['ObjectOperation'])) {
            $model->objectOperation = $map['ObjectOperation'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
