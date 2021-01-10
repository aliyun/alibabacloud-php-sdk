<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class ListDetectionsRequest extends Model
{
    /**
     * @var string
     */
    public $createDateFrom;

    /**
     * @var string
     */
    public $createDateTo;

    /**
     * @var string
     */
    public $departmentId;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $recordingType;

    /**
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
