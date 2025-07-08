<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;

class ExportTmpEffectReportDataRequest extends Model
{
    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $tmpCode;

    /**
     * @var string
     */
    public $tmpName;

    /**
     * @var string
     */
    public $vendorCode;

    /**
     * @var string
     */
    public $vendorName;
    protected $_name = [
        'endDate' => 'EndDate',
        'startDate' => 'StartDate',
        'tmpCode' => 'TmpCode',
        'tmpName' => 'TmpName',
        'vendorCode' => 'VendorCode',
        'vendorName' => 'VendorName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        if (null !== $this->tmpCode) {
            $res['TmpCode'] = $this->tmpCode;
        }

        if (null !== $this->tmpName) {
            $res['TmpName'] = $this->tmpName;
        }

        if (null !== $this->vendorCode) {
            $res['VendorCode'] = $this->vendorCode;
        }

        if (null !== $this->vendorName) {
            $res['VendorName'] = $this->vendorName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        if (isset($map['TmpCode'])) {
            $model->tmpCode = $map['TmpCode'];
        }

        if (isset($map['TmpName'])) {
            $model->tmpName = $map['TmpName'];
        }

        if (isset($map['VendorCode'])) {
            $model->vendorCode = $map['VendorCode'];
        }

        if (isset($map['VendorName'])) {
            $model->vendorName = $map['VendorName'];
        }

        return $model;
    }
}
