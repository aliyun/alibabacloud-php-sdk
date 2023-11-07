<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\AddSasModuleTrialResponseBody\data;

use AlibabaCloud\Tea\Model;

class trialRecordList extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $authLimit;

    /**
     * @example 1638201599999
     *
     * @var int
     */
    public $gmtEnd;

    /**
     * @example 1667232000000
     *
     * @var int
     */
    public $gmtStart;

    /**
     * @example vulFix
     *
     * @var string
     */
    public $moduleCode;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'authLimit'  => 'AuthLimit',
        'gmtEnd'     => 'GmtEnd',
        'gmtStart'   => 'GmtStart',
        'moduleCode' => 'ModuleCode',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authLimit) {
            $res['AuthLimit'] = $this->authLimit;
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

    /**
     * @param array $map
     *
     * @return trialRecordList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthLimit'])) {
            $model->authLimit = $map['AuthLimit'];
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
