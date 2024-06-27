<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class DescribeNameListPageListRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var int
     */
    public $updateBeginTime;

    /**
     * @var int
     */
    public $updateEndTime;

    /**
     * @var string
     */
    public $value;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $variableId;
    protected $_name = [
        'lang'            => 'Lang',
        'currentPage'     => 'currentPage',
        'pageSize'        => 'pageSize',
        'regId'           => 'regId',
        'updateBeginTime' => 'updateBeginTime',
        'updateEndTime'   => 'updateEndTime',
        'value'           => 'value',
        'variableId'      => 'variableId',
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
        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }
        if (null !== $this->updateBeginTime) {
            $res['updateBeginTime'] = $this->updateBeginTime;
        }
        if (null !== $this->updateEndTime) {
            $res['updateEndTime'] = $this->updateEndTime;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->variableId) {
            $res['variableId'] = $this->variableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNameListPageListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }
        if (isset($map['updateBeginTime'])) {
            $model->updateBeginTime = $map['updateBeginTime'];
        }
        if (isset($map['updateEndTime'])) {
            $model->updateEndTime = $map['updateEndTime'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }
        if (isset($map['variableId'])) {
            $model->variableId = $map['variableId'];
        }

        return $model;
    }
}
