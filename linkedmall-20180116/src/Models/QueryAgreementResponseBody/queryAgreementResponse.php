<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAgreementResponseBody;

use AlibabaCloud\Tea\Model;

class queryAgreementResponse extends Model
{
    /**
     * @example 20******8006
     *
     * @var string
     */
    public $agreementNo;

    /**
     * @example ""
     *
     * @var string
     */
    public $externalAgreementNo;

    /**
     * @example 2022-08-01 00:00:00
     *
     * @var string
     */
    public $invalidTime;

    /**
     * @example 2021-08-01 00:00:00
     *
     * @var string
     */
    public $signTime;

    /**
     * @example ""
     *
     * @var string
     */
    public $status;

    /**
     * @example 2021-08-01 00:00:00
     *
     * @var string
     */
    public $validTime;
    protected $_name = [
        'agreementNo'         => 'AgreementNo',
        'externalAgreementNo' => 'ExternalAgreementNo',
        'invalidTime'         => 'InvalidTime',
        'signTime'            => 'SignTime',
        'status'              => 'Status',
        'validTime'           => 'ValidTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agreementNo) {
            $res['AgreementNo'] = $this->agreementNo;
        }
        if (null !== $this->externalAgreementNo) {
            $res['ExternalAgreementNo'] = $this->externalAgreementNo;
        }
        if (null !== $this->invalidTime) {
            $res['InvalidTime'] = $this->invalidTime;
        }
        if (null !== $this->signTime) {
            $res['SignTime'] = $this->signTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->validTime) {
            $res['ValidTime'] = $this->validTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queryAgreementResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgreementNo'])) {
            $model->agreementNo = $map['AgreementNo'];
        }
        if (isset($map['ExternalAgreementNo'])) {
            $model->externalAgreementNo = $map['ExternalAgreementNo'];
        }
        if (isset($map['InvalidTime'])) {
            $model->invalidTime = $map['InvalidTime'];
        }
        if (isset($map['SignTime'])) {
            $model->signTime = $map['SignTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ValidTime'])) {
            $model->validTime = $map['ValidTime'];
        }

        return $model;
    }
}
