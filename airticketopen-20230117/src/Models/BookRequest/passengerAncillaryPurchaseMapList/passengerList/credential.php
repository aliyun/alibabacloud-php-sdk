<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookRequest\passengerAncillaryPurchaseMapList\passengerList;

use AlibabaCloud\Dara\Model;

class credential extends Model
{
    /**
     * @var string
     */
    public $certIssuePlace;

    /**
     * @var string
     */
    public $credentialNum;

    /**
     * @var int
     */
    public $credentialType;

    /**
     * @var string
     */
    public $expireDate;
    protected $_name = [
        'certIssuePlace' => 'cert_issue_place',
        'credentialNum' => 'credential_num',
        'credentialType' => 'credential_type',
        'expireDate' => 'expire_date',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
