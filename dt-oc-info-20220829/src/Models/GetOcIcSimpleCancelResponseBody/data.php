<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcSimpleCancelResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $department;

    /**
     * @var string
     */
    public $entName;

    /**
     * @var string
     */
    public $noticePeriod;

    /**
     * @var string
     */
    public $scaContent;

    /**
     * @example 2022-08-22
     *
     * @var string
     */
    public $scaDate;

    /**
     * @var string
     */
    public $scaProposer;

    /**
     * @var string
     */
    public $scaResult;

    /**
     * @example 2022-08-30
     *
     * @var string
     */
    public $scaResultDate;

    /**
     * @example 911302026610804662
     *
     * @var string
     */
    public $socialCreditCode;
    protected $_name = [
        'department'       => 'Department',
        'entName'          => 'EntName',
        'noticePeriod'     => 'NoticePeriod',
        'scaContent'       => 'ScaContent',
        'scaDate'          => 'ScaDate',
        'scaProposer'      => 'ScaProposer',
        'scaResult'        => 'ScaResult',
        'scaResultDate'    => 'ScaResultDate',
        'socialCreditCode' => 'SocialCreditCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }
        if (null !== $this->entName) {
            $res['EntName'] = $this->entName;
        }
        if (null !== $this->noticePeriod) {
            $res['NoticePeriod'] = $this->noticePeriod;
        }
        if (null !== $this->scaContent) {
            $res['ScaContent'] = $this->scaContent;
        }
        if (null !== $this->scaDate) {
            $res['ScaDate'] = $this->scaDate;
        }
        if (null !== $this->scaProposer) {
            $res['ScaProposer'] = $this->scaProposer;
        }
        if (null !== $this->scaResult) {
            $res['ScaResult'] = $this->scaResult;
        }
        if (null !== $this->scaResultDate) {
            $res['ScaResultDate'] = $this->scaResultDate;
        }
        if (null !== $this->socialCreditCode) {
            $res['SocialCreditCode'] = $this->socialCreditCode;
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
        if (isset($map['Department'])) {
            $model->department = $map['Department'];
        }
        if (isset($map['EntName'])) {
            $model->entName = $map['EntName'];
        }
        if (isset($map['NoticePeriod'])) {
            $model->noticePeriod = $map['NoticePeriod'];
        }
        if (isset($map['ScaContent'])) {
            $model->scaContent = $map['ScaContent'];
        }
        if (isset($map['ScaDate'])) {
            $model->scaDate = $map['ScaDate'];
        }
        if (isset($map['ScaProposer'])) {
            $model->scaProposer = $map['ScaProposer'];
        }
        if (isset($map['ScaResult'])) {
            $model->scaResult = $map['ScaResult'];
        }
        if (isset($map['ScaResultDate'])) {
            $model->scaResultDate = $map['ScaResultDate'];
        }
        if (isset($map['SocialCreditCode'])) {
            $model->socialCreditCode = $map['SocialCreditCode'];
        }

        return $model;
    }
}
