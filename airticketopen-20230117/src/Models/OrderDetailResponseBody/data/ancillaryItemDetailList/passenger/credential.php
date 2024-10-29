<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data\ancillaryItemDetailList\passenger;

use AlibabaCloud\Tea\Model;

class credential extends Model
{
    /**
     * @description place of issue, two-letter code
     *
     * @example CN
     *
     * @var string
     */
    public $certIssuePlace;

    /**
     * @description travel document number
     *
     * @example E1***5674
     *
     * @var string
     */
    public $credentialNum;

    /**
     * @description travel document type , only support "1"(1 means passport) currently.
     *
     * @example 1
     *
     * @var int
     */
    public $credentialType;

    /**
     * @description expiration date
     *
     * @example 20290101
     *
     * @var string
     */
    public $expireDate;
    protected $_name = [
        'certIssuePlace' => 'cert_issue_place',
        'credentialNum'  => 'credential_num',
        'credentialType' => 'credential_type',
        'expireDate'     => 'expire_date',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certIssuePlace) {
            $res['cert_issue_place'] = $this->certIssuePlace;
        }
        if (null !== $this->credentialNum) {
            $res['credential_num'] = $this->credentialNum;
        }
        if (null !== $this->credentialType) {
            $res['credential_type'] = $this->credentialType;
        }
        if (null !== $this->expireDate) {
            $res['expire_date'] = $this->expireDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return credential
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cert_issue_place'])) {
            $model->certIssuePlace = $map['cert_issue_place'];
        }
        if (isset($map['credential_num'])) {
            $model->credentialNum = $map['credential_num'];
        }
        if (isset($map['credential_type'])) {
            $model->credentialType = $map['credential_type'];
        }
        if (isset($map['expire_date'])) {
            $model->expireDate = $map['expire_date'];
        }

        return $model;
    }
}
