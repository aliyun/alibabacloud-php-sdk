<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ListVirtualBridgesResponseBody;

use AlibabaCloud\Dara\Model;

class bridges extends Model
{
    /**
     * @var string
     */
    public $accessType;

    /**
     * @var string
     */
    public $bridgeId;

    /**
     * @var string
     */
    public $bridgeLevel;

    /**
     * @var string
     */
    public $bridgeStatus;

    /**
     * @var string
     */
    public $bridgeType;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $intranetUrl;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $officeSiteName;
    protected $_name = [
        'accessType' => 'AccessType',
        'bridgeId' => 'BridgeId',
        'bridgeLevel' => 'BridgeLevel',
        'bridgeStatus' => 'BridgeStatus',
        'bridgeType' => 'BridgeType',
        'expireTime' => 'ExpireTime',
        'intranetUrl' => 'IntranetUrl',
        'officeSiteId' => 'OfficeSiteId',
        'officeSiteName' => 'OfficeSiteName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }

        if (null !== $this->bridgeId) {
            $res['BridgeId'] = $this->bridgeId;
        }

        if (null !== $this->bridgeLevel) {
            $res['BridgeLevel'] = $this->bridgeLevel;
        }

        if (null !== $this->bridgeStatus) {
            $res['BridgeStatus'] = $this->bridgeStatus;
        }

        if (null !== $this->bridgeType) {
            $res['BridgeType'] = $this->bridgeType;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->intranetUrl) {
            $res['IntranetUrl'] = $this->intranetUrl;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->officeSiteName) {
            $res['OfficeSiteName'] = $this->officeSiteName;
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
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }

        if (isset($map['BridgeId'])) {
            $model->bridgeId = $map['BridgeId'];
        }

        if (isset($map['BridgeLevel'])) {
            $model->bridgeLevel = $map['BridgeLevel'];
        }

        if (isset($map['BridgeStatus'])) {
            $model->bridgeStatus = $map['BridgeStatus'];
        }

        if (isset($map['BridgeType'])) {
            $model->bridgeType = $map['BridgeType'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['IntranetUrl'])) {
            $model->intranetUrl = $map['IntranetUrl'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['OfficeSiteName'])) {
            $model->officeSiteName = $map['OfficeSiteName'];
        }

        return $model;
    }
}
