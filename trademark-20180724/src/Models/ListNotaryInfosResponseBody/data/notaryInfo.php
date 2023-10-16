<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\ListNotaryInfosResponseBody\data;

use AlibabaCloud\Tea\Model;

class notaryInfo extends Model
{
    /**
     * @example trademark_prepayment_pre-cn-123123test
     *
     * @var string
     */
    public $bizOrderNo;

    /**
     * @example 123231231213213
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $notaryFailedReason;

    /**
     * @example 1
     *
     * @var int
     */
    public $notaryStatus;

    /**
     * @example 23
     *
     * @var string
     */
    public $tmClassification;

    /**
     * @example 123312
     *
     * @var string
     */
    public $tmRegisterNo;

    /**
     * @description token
     *
     * @example 2dd2eed1-34d2-4142-811a-8861cf0076c3
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'bizOrderNo'         => 'BizOrderNo',
        'gmtModified'        => 'GmtModified',
        'notaryFailedReason' => 'NotaryFailedReason',
        'notaryStatus'       => 'NotaryStatus',
        'tmClassification'   => 'TmClassification',
        'tmRegisterNo'       => 'TmRegisterNo',
        'token'              => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizOrderNo) {
            $res['BizOrderNo'] = $this->bizOrderNo;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->notaryFailedReason) {
            $res['NotaryFailedReason'] = $this->notaryFailedReason;
        }
        if (null !== $this->notaryStatus) {
            $res['NotaryStatus'] = $this->notaryStatus;
        }
        if (null !== $this->tmClassification) {
            $res['TmClassification'] = $this->tmClassification;
        }
        if (null !== $this->tmRegisterNo) {
            $res['TmRegisterNo'] = $this->tmRegisterNo;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notaryInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizOrderNo'])) {
            $model->bizOrderNo = $map['BizOrderNo'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['NotaryFailedReason'])) {
            $model->notaryFailedReason = $map['NotaryFailedReason'];
        }
        if (isset($map['NotaryStatus'])) {
            $model->notaryStatus = $map['NotaryStatus'];
        }
        if (isset($map['TmClassification'])) {
            $model->tmClassification = $map['TmClassification'];
        }
        if (isset($map['TmRegisterNo'])) {
            $model->tmRegisterNo = $map['TmRegisterNo'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
