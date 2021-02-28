<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models;

use AlibabaCloud\Tea\Model;

class OpenScdnServiceRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $protectType;

    /**
     * @var int
     */
    public $DDoSBasic;

    /**
     * @var int
     */
    public $elasticProtection;

    /**
     * @var int
     */
    public $ccProtection;

    /**
     * @var int
     */
    public $domainCount;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $endDate;
    protected $_name = [
        'ownerId'           => 'OwnerId',
        'securityToken'     => 'SecurityToken',
        'bandwidth'         => 'Bandwidth',
        'protectType'       => 'ProtectType',
        'DDoSBasic'         => 'DDoSBasic',
        'elasticProtection' => 'ElasticProtection',
        'ccProtection'      => 'CcProtection',
        'domainCount'       => 'DomainCount',
        'startDate'         => 'StartDate',
        'endDate'           => 'EndDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->protectType) {
            $res['ProtectType'] = $this->protectType;
        }
        if (null !== $this->DDoSBasic) {
            $res['DDoSBasic'] = $this->DDoSBasic;
        }
        if (null !== $this->elasticProtection) {
            $res['ElasticProtection'] = $this->elasticProtection;
        }
        if (null !== $this->ccProtection) {
            $res['CcProtection'] = $this->ccProtection;
        }
        if (null !== $this->domainCount) {
            $res['DomainCount'] = $this->domainCount;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OpenScdnServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ProtectType'])) {
            $model->protectType = $map['ProtectType'];
        }
        if (isset($map['DDoSBasic'])) {
            $model->DDoSBasic = $map['DDoSBasic'];
        }
        if (isset($map['ElasticProtection'])) {
            $model->elasticProtection = $map['ElasticProtection'];
        }
        if (isset($map['CcProtection'])) {
            $model->ccProtection = $map['CcProtection'];
        }
        if (isset($map['DomainCount'])) {
            $model->domainCount = $map['DomainCount'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        return $model;
    }
}
