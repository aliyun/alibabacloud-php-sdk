<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAgreementResponseBody;

use AlibabaCloud\Tea\Model;

class queryAgreementResponse extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $externalAgreementNo;

    /**
     * @var string
     */
    public $validTime;

    /**
     * @var string
     */
    public $invalidTime;

    /**
     * @var string
     */
    public $agreementNo;

    /**
     * @var string
     */
    public $signTime;
    protected $_name = [
        'status'              => 'Status',
        'externalAgreementNo' => 'ExternalAgreementNo',
        'validTime'           => 'ValidTime',
        'invalidTime'         => 'InvalidTime',
        'agreementNo'         => 'AgreementNo',
        'signTime'            => 'SignTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->externalAgreementNo) {
            $res['ExternalAgreementNo'] = $this->externalAgreementNo;
        }
        if (null !== $this->validTime) {
            $res['ValidTime'] = $this->validTime;
        }
        if (null !== $this->invalidTime) {
            $res['InvalidTime'] = $this->invalidTime;
        }
        if (null !== $this->agreementNo) {
            $res['AgreementNo'] = $this->agreementNo;
        }
        if (null !== $this->signTime) {
            $res['SignTime'] = $this->signTime;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ExternalAgreementNo'])) {
            $model->externalAgreementNo = $map['ExternalAgreementNo'];
        }
        if (isset($map['ValidTime'])) {
            $model->validTime = $map['ValidTime'];
        }
        if (isset($map['InvalidTime'])) {
            $model->invalidTime = $map['InvalidTime'];
        }
        if (isset($map['AgreementNo'])) {
            $model->agreementNo = $map['AgreementNo'];
        }
        if (isset($map['SignTime'])) {
            $model->signTime = $map['SignTime'];
        }

        return $model;
    }
}
