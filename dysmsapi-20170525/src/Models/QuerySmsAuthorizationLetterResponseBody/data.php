<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsAuthorizationLetterResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $authorization;

    /**
     * @var string
     */
    public $authorizationLetterExpDate;

    /**
     * @var int
     */
    public $authorizationLetterId;

    /**
     * @var string
     */
    public $authorizationLetterName;

    /**
     * @var string
     */
    public $authorizationLetterPic;

    /**
     * @var string
     */
    public $organizationCode;

    /**
     * @var string
     */
    public $proxyAuthorization;

    /**
     * @var string
     */
    public $signScope;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'authorization' => 'Authorization',
        'authorizationLetterExpDate' => 'AuthorizationLetterExpDate',
        'authorizationLetterId' => 'AuthorizationLetterId',
        'authorizationLetterName' => 'AuthorizationLetterName',
        'authorizationLetterPic' => 'AuthorizationLetterPic',
        'organizationCode' => 'OrganizationCode',
        'proxyAuthorization' => 'ProxyAuthorization',
        'signScope' => 'SignScope',
        'state' => 'State',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorization) {
            $res['Authorization'] = $this->authorization;
        }

        if (null !== $this->authorizationLetterExpDate) {
            $res['AuthorizationLetterExpDate'] = $this->authorizationLetterExpDate;
        }

        if (null !== $this->authorizationLetterId) {
            $res['AuthorizationLetterId'] = $this->authorizationLetterId;
        }

        if (null !== $this->authorizationLetterName) {
            $res['AuthorizationLetterName'] = $this->authorizationLetterName;
        }

        if (null !== $this->authorizationLetterPic) {
            $res['AuthorizationLetterPic'] = $this->authorizationLetterPic;
        }

        if (null !== $this->organizationCode) {
            $res['OrganizationCode'] = $this->organizationCode;
        }

        if (null !== $this->proxyAuthorization) {
            $res['ProxyAuthorization'] = $this->proxyAuthorization;
        }

        if (null !== $this->signScope) {
            $res['SignScope'] = $this->signScope;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Authorization'])) {
            $model->authorization = $map['Authorization'];
        }

        if (isset($map['AuthorizationLetterExpDate'])) {
            $model->authorizationLetterExpDate = $map['AuthorizationLetterExpDate'];
        }

        if (isset($map['AuthorizationLetterId'])) {
            $model->authorizationLetterId = $map['AuthorizationLetterId'];
        }

        if (isset($map['AuthorizationLetterName'])) {
            $model->authorizationLetterName = $map['AuthorizationLetterName'];
        }

        if (isset($map['AuthorizationLetterPic'])) {
            $model->authorizationLetterPic = $map['AuthorizationLetterPic'];
        }

        if (isset($map['OrganizationCode'])) {
            $model->organizationCode = $map['OrganizationCode'];
        }

        if (isset($map['ProxyAuthorization'])) {
            $model->proxyAuthorization = $map['ProxyAuthorization'];
        }

        if (isset($map['SignScope'])) {
            $model->signScope = $map['SignScope'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
