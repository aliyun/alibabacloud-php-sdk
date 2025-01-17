<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\AddSasModuleTrialResponseBody\data;

use AlibabaCloud\Dara\Model;

class trialRecordList extends Model
{
    /**
     * @var int
     */
    public $authLimit;
    /**
     * @var string
     */
    public $authLimitList;
    /**
     * @var int
     */
    public $gmtEnd;
    /**
     * @var int
     */
    public $gmtStart;
    /**
     * @var string
     */
    public $moduleCode;
    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'authLimit'     => 'AuthLimit',
        'authLimitList' => 'AuthLimitList',
        'gmtEnd'        => 'GmtEnd',
        'gmtStart'      => 'GmtStart',
        'moduleCode'    => 'ModuleCode',
        'status'        => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authLimit) {
            $res['AuthLimit'] = $this->authLimit;
        }

        if (null !== $this->authLimitList) {
            $res['AuthLimitList'] = $this->authLimitList;
        }

        if (null !== $this->gmtEnd) {
            $res['GmtEnd'] = $this->gmtEnd;
        }

        if (null !== $this->gmtStart) {
            $res['GmtStart'] = $this->gmtStart;
        }

        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AuthLimit'])) {
            $model->authLimit = $map['AuthLimit'];
        }

        if (isset($map['AuthLimitList'])) {
            $model->authLimitList = $map['AuthLimitList'];
        }

        if (isset($map['GmtEnd'])) {
            $model->gmtEnd = $map['GmtEnd'];
        }

        if (isset($map['GmtStart'])) {
            $model->gmtStart = $map['GmtStart'];
        }

        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
