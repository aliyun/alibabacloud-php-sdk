<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIpWorksCopyrightResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2017-07-19
     *
     * @var string
     */
    public $approvalDate;

    /**
     * @var string
     */
    public $copyName;

    /**
     * @var string
     */
    public $copyNum;

    /**
     * @var string
     */
    public $entName;

    /**
     * @example 2017-01-03
     *
     * @var string
     */
    public $firstDate;

    /**
     * @example 2016-09-13
     *
     * @var string
     */
    public $successDate;

    /**
     * @var string
     */
    public $typeName;
    protected $_name = [
        'approvalDate' => 'ApprovalDate',
        'copyName'     => 'CopyName',
        'copyNum'      => 'CopyNum',
        'entName'      => 'EntName',
        'firstDate'    => 'FirstDate',
        'successDate'  => 'SuccessDate',
        'typeName'     => 'TypeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->approvalDate) {
            $res['ApprovalDate'] = $this->approvalDate;
        }
        if (null !== $this->copyName) {
            $res['CopyName'] = $this->copyName;
        }
        if (null !== $this->copyNum) {
            $res['CopyNum'] = $this->copyNum;
        }
        if (null !== $this->entName) {
            $res['EntName'] = $this->entName;
        }
        if (null !== $this->firstDate) {
            $res['FirstDate'] = $this->firstDate;
        }
        if (null !== $this->successDate) {
            $res['SuccessDate'] = $this->successDate;
        }
        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApprovalDate'])) {
            $model->approvalDate = $map['ApprovalDate'];
        }
        if (isset($map['CopyName'])) {
            $model->copyName = $map['CopyName'];
        }
        if (isset($map['CopyNum'])) {
            $model->copyNum = $map['CopyNum'];
        }
        if (isset($map['EntName'])) {
            $model->entName = $map['EntName'];
        }
        if (isset($map['FirstDate'])) {
            $model->firstDate = $map['FirstDate'];
        }
        if (isset($map['SuccessDate'])) {
            $model->successDate = $map['SuccessDate'];
        }
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }

        return $model;
    }
}
