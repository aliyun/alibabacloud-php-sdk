<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIpSoftwareCopyrightResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2019-09-12
     *
     * @var string
     */
    public $approvalDate;

    /**
     * @var string
     */
    public $copyName;

    /**
     * @example 2019SR0950125
     *
     * @var string
     */
    public $copyNum;

    /**
     * @var string
     */
    public $entName;

    /**
     * @example 2019-02-15
     *
     * @var string
     */
    public $firstDate;

    /**
     * @example “”
     *
     * @var string
     */
    public $shortName;

    /**
     * @example 2019-02-15
     *
     * @var string
     */
    public $successDate;

    /**
     * @example 30200-0000
     *
     * @var string
     */
    public $typeNum;

    /**
     * @example V1.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'approvalDate' => 'ApprovalDate',
        'copyName'     => 'CopyName',
        'copyNum'      => 'CopyNum',
        'entName'      => 'EntName',
        'firstDate'    => 'FirstDate',
        'shortName'    => 'ShortName',
        'successDate'  => 'SuccessDate',
        'typeNum'      => 'TypeNum',
        'version'      => 'Version',
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
        if (null !== $this->shortName) {
            $res['ShortName'] = $this->shortName;
        }
        if (null !== $this->successDate) {
            $res['SuccessDate'] = $this->successDate;
        }
        if (null !== $this->typeNum) {
            $res['TypeNum'] = $this->typeNum;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['ShortName'])) {
            $model->shortName = $map['ShortName'];
        }
        if (isset($map['SuccessDate'])) {
            $model->successDate = $map['SuccessDate'];
        }
        if (isset($map['TypeNum'])) {
            $model->typeNum = $map['TypeNum'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
