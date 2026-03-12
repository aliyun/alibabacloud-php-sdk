<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20160511\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20160511\Models\QueryDomainBySaleIdResponseBody\dnsList;

class QueryDomainBySaleIdResponseBody extends Model
{
    /**
     * @var string
     */
    public $chineseContactPerson;

    /**
     * @var string
     */
    public $chineseHolder;

    /**
     * @var string
     */
    public $creationDate;

    /**
     * @var dnsList
     */
    public $dnsList;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainRegType;

    /**
     * @var bool
     */
    public $emailVerificationClientHold;

    /**
     * @var int
     */
    public $emailVerificationStatus;

    /**
     * @var string
     */
    public $englishContactPerson;

    /**
     * @var string
     */
    public $englishHolder;

    /**
     * @var string
     */
    public $expirationDate;

    /**
     * @var string
     */
    public $holderEmail;

    /**
     * @var bool
     */
    public $premium;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $safetyLock;

    /**
     * @var string
     */
    public $saleId;

    /**
     * @var string
     */
    public $transferLock;

    /**
     * @var string
     */
    public $transferOutStatus;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var bool
     */
    public $whoisProtected;
    protected $_name = [
        'chineseContactPerson' => 'ChineseContactPerson',
        'chineseHolder' => 'ChineseHolder',
        'creationDate' => 'CreationDate',
        'dnsList' => 'DnsList',
        'domainName' => 'DomainName',
        'domainRegType' => 'DomainRegType',
        'emailVerificationClientHold' => 'EmailVerificationClientHold',
        'emailVerificationStatus' => 'EmailVerificationStatus',
        'englishContactPerson' => 'EnglishContactPerson',
        'englishHolder' => 'EnglishHolder',
        'expirationDate' => 'ExpirationDate',
        'holderEmail' => 'HolderEmail',
        'premium' => 'Premium',
        'remark' => 'Remark',
        'safetyLock' => 'SafetyLock',
        'saleId' => 'SaleId',
        'transferLock' => 'TransferLock',
        'transferOutStatus' => 'TransferOutStatus',
        'userId' => 'UserId',
        'whoisProtected' => 'WhoisProtected',
    ];

    public function validate()
    {
        if (null !== $this->dnsList) {
            $this->dnsList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chineseContactPerson) {
            $res['ChineseContactPerson'] = $this->chineseContactPerson;
        }

        if (null !== $this->chineseHolder) {
            $res['ChineseHolder'] = $this->chineseHolder;
        }

        if (null !== $this->creationDate) {
            $res['CreationDate'] = $this->creationDate;
        }

        if (null !== $this->dnsList) {
            $res['DnsList'] = null !== $this->dnsList ? $this->dnsList->toArray($noStream) : $this->dnsList;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->domainRegType) {
            $res['DomainRegType'] = $this->domainRegType;
        }

        if (null !== $this->emailVerificationClientHold) {
            $res['EmailVerificationClientHold'] = $this->emailVerificationClientHold;
        }

        if (null !== $this->emailVerificationStatus) {
            $res['EmailVerificationStatus'] = $this->emailVerificationStatus;
        }

        if (null !== $this->englishContactPerson) {
            $res['EnglishContactPerson'] = $this->englishContactPerson;
        }

        if (null !== $this->englishHolder) {
            $res['EnglishHolder'] = $this->englishHolder;
        }

        if (null !== $this->expirationDate) {
            $res['ExpirationDate'] = $this->expirationDate;
        }

        if (null !== $this->holderEmail) {
            $res['HolderEmail'] = $this->holderEmail;
        }

        if (null !== $this->premium) {
            $res['Premium'] = $this->premium;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->safetyLock) {
            $res['SafetyLock'] = $this->safetyLock;
        }

        if (null !== $this->saleId) {
            $res['SaleId'] = $this->saleId;
        }

        if (null !== $this->transferLock) {
            $res['TransferLock'] = $this->transferLock;
        }

        if (null !== $this->transferOutStatus) {
            $res['TransferOutStatus'] = $this->transferOutStatus;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->whoisProtected) {
            $res['WhoisProtected'] = $this->whoisProtected;
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
        if (isset($map['ChineseContactPerson'])) {
            $model->chineseContactPerson = $map['ChineseContactPerson'];
        }

        if (isset($map['ChineseHolder'])) {
            $model->chineseHolder = $map['ChineseHolder'];
        }

        if (isset($map['CreationDate'])) {
            $model->creationDate = $map['CreationDate'];
        }

        if (isset($map['DnsList'])) {
            $model->dnsList = dnsList::fromMap($map['DnsList']);
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['DomainRegType'])) {
            $model->domainRegType = $map['DomainRegType'];
        }

        if (isset($map['EmailVerificationClientHold'])) {
            $model->emailVerificationClientHold = $map['EmailVerificationClientHold'];
        }

        if (isset($map['EmailVerificationStatus'])) {
            $model->emailVerificationStatus = $map['EmailVerificationStatus'];
        }

        if (isset($map['EnglishContactPerson'])) {
            $model->englishContactPerson = $map['EnglishContactPerson'];
        }

        if (isset($map['EnglishHolder'])) {
            $model->englishHolder = $map['EnglishHolder'];
        }

        if (isset($map['ExpirationDate'])) {
            $model->expirationDate = $map['ExpirationDate'];
        }

        if (isset($map['HolderEmail'])) {
            $model->holderEmail = $map['HolderEmail'];
        }

        if (isset($map['Premium'])) {
            $model->premium = $map['Premium'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['SafetyLock'])) {
            $model->safetyLock = $map['SafetyLock'];
        }

        if (isset($map['SaleId'])) {
            $model->saleId = $map['SaleId'];
        }

        if (isset($map['TransferLock'])) {
            $model->transferLock = $map['TransferLock'];
        }

        if (isset($map['TransferOutStatus'])) {
            $model->transferOutStatus = $map['TransferOutStatus'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['WhoisProtected'])) {
            $model->whoisProtected = $map['WhoisProtected'];
        }

        return $model;
    }
}
