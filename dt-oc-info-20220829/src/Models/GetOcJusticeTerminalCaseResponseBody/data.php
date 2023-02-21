<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcJusticeTerminalCaseResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $caseNum;

    /**
     * @var string
     */
    public $court;

    /**
     * @var string
     */
    public $entName;

    /**
     * @example 2141166.0
     *
     * @var string
     */
    public $execAmount;

    /**
     * @example 2141166.0
     *
     * @var string
     */
    public $failPerformAmount;

    /**
     * @example 2022-03-05
     *
     * @var string
     */
    public $filingDate;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $terminalNum;

    /**
     * @example 2022-07-27
     *
     * @var string
     */
    public $terminateDate;
    protected $_name = [
        'caseNum'           => 'CaseNum',
        'court'             => 'Court',
        'entName'           => 'EntName',
        'execAmount'        => 'ExecAmount',
        'failPerformAmount' => 'FailPerformAmount',
        'filingDate'        => 'FilingDate',
        'name'              => 'Name',
        'terminalNum'       => 'TerminalNum',
        'terminateDate'     => 'TerminateDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caseNum) {
            $res['CaseNum'] = $this->caseNum;
        }
        if (null !== $this->court) {
            $res['Court'] = $this->court;
        }
        if (null !== $this->entName) {
            $res['EntName'] = $this->entName;
        }
        if (null !== $this->execAmount) {
            $res['ExecAmount'] = $this->execAmount;
        }
        if (null !== $this->failPerformAmount) {
            $res['FailPerformAmount'] = $this->failPerformAmount;
        }
        if (null !== $this->filingDate) {
            $res['FilingDate'] = $this->filingDate;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->terminalNum) {
            $res['TerminalNum'] = $this->terminalNum;
        }
        if (null !== $this->terminateDate) {
            $res['TerminateDate'] = $this->terminateDate;
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
        if (isset($map['CaseNum'])) {
            $model->caseNum = $map['CaseNum'];
        }
        if (isset($map['Court'])) {
            $model->court = $map['Court'];
        }
        if (isset($map['EntName'])) {
            $model->entName = $map['EntName'];
        }
        if (isset($map['ExecAmount'])) {
            $model->execAmount = $map['ExecAmount'];
        }
        if (isset($map['FailPerformAmount'])) {
            $model->failPerformAmount = $map['FailPerformAmount'];
        }
        if (isset($map['FilingDate'])) {
            $model->filingDate = $map['FilingDate'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TerminalNum'])) {
            $model->terminalNum = $map['TerminalNum'];
        }
        if (isset($map['TerminateDate'])) {
            $model->terminateDate = $map['TerminateDate'];
        }

        return $model;
    }
}
