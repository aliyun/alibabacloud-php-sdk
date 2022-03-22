<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models;

use AlibabaCloud\Tea\Model;

class OpenScdnServiceRequest extends Model
{
    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var int
     */
    public $ccProtection;

    /**
     * @var int
     */
    public $DDoSBasic;

    /**
     * @var int
     */
    public $domainCount;

    /**
     * @var int
     */
    public $elasticProtection;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $protectType;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $startDate;
    protected $_name = [
        'bandwidth'         => 'Bandwidth',
        'ccProtection'      => 'CcProtection',
        'DDoSBasic'         => 'DDoSBasic',
        'domainCount'       => 'DomainCount',
        'elasticProtection' => 'ElasticProtection',
        'endDate'           => 'EndDate',
        'ownerId'           => 'OwnerId',
        'protectType'       => 'ProtectType',
        'securityToken'     => 'SecurityToken',
        'startDate'         => 'StartDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->ccProtection) {
            $res['CcProtection'] = $this->ccProtection;
        }
        if (null !== $this->DDoSBasic) {
            $res['DDoSBasic'] = $this->DDoSBasic;
        }
        if (null !== $this->domainCount) {
            $res['DomainCount'] = $this->domainCount;
        }
        if (null !== $this->elasticProtection) {
            $res['ElasticProtection'] = $this->elasticProtection;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->protectType) {
            $res['ProtectType'] = $this->protectType;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
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
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['CcProtection'])) {
            $model->ccProtection = $map['CcProtection'];
        }
        if (isset($map['DDoSBasic'])) {
            $model->DDoSBasic = $map['DDoSBasic'];
        }
        if (isset($map['DomainCount'])) {
            $model->domainCount = $map['DomainCount'];
        }
        if (isset($map['ElasticProtection'])) {
            $model->elasticProtection = $map['ElasticProtection'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProtectType'])) {
            $model->protectType = $map['ProtectType'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
