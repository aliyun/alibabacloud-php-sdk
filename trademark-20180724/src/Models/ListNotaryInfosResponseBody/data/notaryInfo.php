<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\ListNotaryInfosResponseBody\data;

use AlibabaCloud\Tea\Model;

class notaryInfo extends Model
{
    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $tmRegisterNo;

    /**
     * @var string
     */
    public $tmClassification;

    /**
     * @var string
     */
    public $notaryFailedReason;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $notaryStatus;

    /**
     * @var string
     */
    public $bizOrderNo;
    protected $_name = [
        'token'              => 'Token',
        'tmRegisterNo'       => 'TmRegisterNo',
        'tmClassification'   => 'TmClassification',
        'notaryFailedReason' => 'NotaryFailedReason',
        'gmtModified'        => 'GmtModified',
        'notaryStatus'       => 'NotaryStatus',
        'bizOrderNo'         => 'BizOrderNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->tmRegisterNo) {
            $res['TmRegisterNo'] = $this->tmRegisterNo;
        }
        if (null !== $this->tmClassification) {
            $res['TmClassification'] = $this->tmClassification;
        }
        if (null !== $this->notaryFailedReason) {
            $res['NotaryFailedReason'] = $this->notaryFailedReason;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->notaryStatus) {
            $res['NotaryStatus'] = $this->notaryStatus;
        }
        if (null !== $this->bizOrderNo) {
            $res['BizOrderNo'] = $this->bizOrderNo;
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
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['TmRegisterNo'])) {
            $model->tmRegisterNo = $map['TmRegisterNo'];
        }
        if (isset($map['TmClassification'])) {
            $model->tmClassification = $map['TmClassification'];
        }
        if (isset($map['NotaryFailedReason'])) {
            $model->notaryFailedReason = $map['NotaryFailedReason'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['NotaryStatus'])) {
            $model->notaryStatus = $map['NotaryStatus'];
        }
        if (isset($map['BizOrderNo'])) {
            $model->bizOrderNo = $map['BizOrderNo'];
        }

        return $model;
    }
}
