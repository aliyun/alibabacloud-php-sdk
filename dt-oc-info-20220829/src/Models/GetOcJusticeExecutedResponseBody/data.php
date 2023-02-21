<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcJusticeExecutedResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1387500.0
     *
     * @var string
     */
    public $amount;

    /**
     * @var string
     */
    public $caseNum;

    /**
     * @var string
     */
    public $court;

    /**
     * @example 2022-09-21
     *
     * @var string
     */
    public $filingDate;
    protected $_name = [
        'amount'     => 'Amount',
        'caseNum'    => 'CaseNum',
        'court'      => 'Court',
        'filingDate' => 'FilingDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->caseNum) {
            $res['CaseNum'] = $this->caseNum;
        }
        if (null !== $this->court) {
            $res['Court'] = $this->court;
        }
        if (null !== $this->filingDate) {
            $res['FilingDate'] = $this->filingDate;
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
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['CaseNum'])) {
            $model->caseNum = $map['CaseNum'];
        }
        if (isset($map['Court'])) {
            $model->court = $map['Court'];
        }
        if (isset($map['FilingDate'])) {
            $model->filingDate = $map['FilingDate'];
        }

        return $model;
    }
}
