<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class DescribeAllRootVariableRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $deviceVariableIds;

    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $expressionVariableIds;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $nativeVariableIds;

    /**
     * @var string
     */
    public $queryVariableIds;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $velocityVariableIds;
    protected $_name = [
        'lang'                  => 'Lang',
        'sourceIp'              => 'SourceIp',
        'deviceVariableIds'     => 'deviceVariableIds',
        'eventCode'             => 'eventCode',
        'expressionVariableIds' => 'expressionVariableIds',
        'id'                    => 'id',
        'nativeVariableIds'     => 'nativeVariableIds',
        'queryVariableIds'      => 'queryVariableIds',
        'regId'                 => 'regId',
        'velocityVariableIds'   => 'velocityVariableIds',
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
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->deviceVariableIds) {
            $res['deviceVariableIds'] = $this->deviceVariableIds;
        }
        if (null !== $this->eventCode) {
            $res['eventCode'] = $this->eventCode;
        }
        if (null !== $this->expressionVariableIds) {
            $res['expressionVariableIds'] = $this->expressionVariableIds;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->nativeVariableIds) {
            $res['nativeVariableIds'] = $this->nativeVariableIds;
        }
        if (null !== $this->queryVariableIds) {
            $res['queryVariableIds'] = $this->queryVariableIds;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }
        if (null !== $this->velocityVariableIds) {
            $res['velocityVariableIds'] = $this->velocityVariableIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAllRootVariableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['deviceVariableIds'])) {
            $model->deviceVariableIds = $map['deviceVariableIds'];
        }
        if (isset($map['eventCode'])) {
            $model->eventCode = $map['eventCode'];
        }
        if (isset($map['expressionVariableIds'])) {
            $model->expressionVariableIds = $map['expressionVariableIds'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['nativeVariableIds'])) {
            $model->nativeVariableIds = $map['nativeVariableIds'];
        }
        if (isset($map['queryVariableIds'])) {
            $model->queryVariableIds = $map['queryVariableIds'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }
        if (isset($map['velocityVariableIds'])) {
            $model->velocityVariableIds = $map['velocityVariableIds'];
        }

        return $model;
    }
}
