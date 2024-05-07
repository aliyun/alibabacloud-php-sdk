<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class ListDetectionsRequest extends Model
{
    /**
     * @example 2020-10-10
     *
     * @var string
     */
    public $createDateFrom;

    /**
     * @example 2020-10-11
     *
     * @var string
     */
    public $createDateTo;

    /**
     * @example 59b0bbfe-929b-4a8c-9833-3ce70b4bad38
     *
     * @var string
     */
    public $departmentId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example local
     *
     * @var string
     */
    public $recordingType;

    /**
     * @example 59b0bbfe-929b-4a8c-9833-3ce70b4bad38
     *
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'createDateFrom' => 'CreateDateFrom',
        'createDateTo'   => 'CreateDateTo',
        'departmentId'   => 'DepartmentId',
        'pageIndex'      => 'PageIndex',
        'pageSize'       => 'PageSize',
        'recordingType'  => 'RecordingType',
        'ruleId'         => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createDateFrom) {
            $res['CreateDateFrom'] = $this->createDateFrom;
        }
        if (null !== $this->createDateTo) {
            $res['CreateDateTo'] = $this->createDateTo;
        }
        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->recordingType) {
            $res['RecordingType'] = $this->recordingType;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDetectionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateDateFrom'])) {
            $model->createDateFrom = $map['CreateDateFrom'];
        }
        if (isset($map['CreateDateTo'])) {
            $model->createDateTo = $map['CreateDateTo'];
        }
        if (isset($map['DepartmentId'])) {
            $model->departmentId = $map['DepartmentId'];
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RecordingType'])) {
            $model->recordingType = $map['RecordingType'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
