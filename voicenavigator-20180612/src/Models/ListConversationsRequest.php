<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class ListConversationsRequest extends Model
{
    /**
     * @example 1638288000000
     *
     * @var int
     */
    public $beginTimeLeftRange;

    /**
     * @example 1637547875311
     *
     * @var int
     */
    public $beginTimeRightRange;

    /**
     * @example 138106*****
     *
     * @var string
     */
    public $callingNumber;

    /**
     * @description This parameter is required.
     *
     * @example da37319b-6c83-4268-9f19-814aed62e401
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example false
     *
     * @var string
     */
    public $isSandBox;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 13788914724
     *
     * @var string
     */
    public $query;

    /**
     * @example 0
     *
     * @var int
     */
    public $result;

    /**
     * @var int
     */
    public $roundsLeftRange;

    /**
     * @var int
     */
    public $roundsRightRange;
    protected $_name = [
        'beginTimeLeftRange'  => 'BeginTimeLeftRange',
        'beginTimeRightRange' => 'BeginTimeRightRange',
        'callingNumber'       => 'CallingNumber',
        'instanceId'          => 'InstanceId',
        'isSandBox'           => 'IsSandBox',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'query'               => 'Query',
        'result'              => 'Result',
        'roundsLeftRange'     => 'RoundsLeftRange',
        'roundsRightRange'    => 'RoundsRightRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTimeLeftRange) {
            $res['BeginTimeLeftRange'] = $this->beginTimeLeftRange;
        }
        if (null !== $this->beginTimeRightRange) {
            $res['BeginTimeRightRange'] = $this->beginTimeRightRange;
        }
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isSandBox) {
            $res['IsSandBox'] = $this->isSandBox;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->roundsLeftRange) {
            $res['RoundsLeftRange'] = $this->roundsLeftRange;
        }
        if (null !== $this->roundsRightRange) {
            $res['RoundsRightRange'] = $this->roundsRightRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConversationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTimeLeftRange'])) {
            $model->beginTimeLeftRange = $map['BeginTimeLeftRange'];
        }
        if (isset($map['BeginTimeRightRange'])) {
            $model->beginTimeRightRange = $map['BeginTimeRightRange'];
        }
        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IsSandBox'])) {
            $model->isSandBox = $map['IsSandBox'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['RoundsLeftRange'])) {
            $model->roundsLeftRange = $map['RoundsLeftRange'];
        }
        if (isset($map['RoundsRightRange'])) {
            $model->roundsRightRange = $map['RoundsRightRange'];
        }

        return $model;
    }
}
