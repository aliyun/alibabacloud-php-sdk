<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeGroupedInstancesRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $fieldValue;

    /**
     * @var string
     */
    public $groupField;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $machineTypes;

    /**
     * @var bool
     */
    public $noPage;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'currentPage'  => 'CurrentPage',
        'fieldValue'   => 'FieldValue',
        'groupField'   => 'GroupField',
        'lang'         => 'Lang',
        'machineTypes' => 'MachineTypes',
        'noPage'       => 'NoPage',
        'pageSize'     => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->fieldValue) {
            $res['FieldValue'] = $this->fieldValue;
        }
        if (null !== $this->groupField) {
            $res['GroupField'] = $this->groupField;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->machineTypes) {
            $res['MachineTypes'] = $this->machineTypes;
        }
        if (null !== $this->noPage) {
            $res['NoPage'] = $this->noPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGroupedInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['FieldValue'])) {
            $model->fieldValue = $map['FieldValue'];
        }
        if (isset($map['GroupField'])) {
            $model->groupField = $map['GroupField'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['MachineTypes'])) {
            $model->machineTypes = $map['MachineTypes'];
        }
        if (isset($map['NoPage'])) {
            $model->noPage = $map['NoPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
