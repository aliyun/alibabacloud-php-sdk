<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models;

use AlibabaCloud\Tea\Model;

class CreateProxyBrandUserRequest extends Model
{
    /**
     * @var int
     */
    public $proxyUserId;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $company;

    /**
     * @var string
     */
    public $industry;

    /**
     * @var string
     */
    public $brandUserNick;

    /**
     * @var string
     */
    public $contactPhone;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'proxyUserId'   => 'ProxyUserId',
        'contactName'   => 'ContactName',
        'company'       => 'Company',
        'industry'      => 'Industry',
        'brandUserNick' => 'BrandUserNick',
        'contactPhone'  => 'ContactPhone',
        'channelId'     => 'ChannelId',
        'clientToken'   => 'ClientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->proxyUserId) {
            $res['ProxyUserId'] = $this->proxyUserId;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->company) {
            $res['Company'] = $this->company;
        }
        if (null !== $this->industry) {
            $res['Industry'] = $this->industry;
        }
        if (null !== $this->brandUserNick) {
            $res['BrandUserNick'] = $this->brandUserNick;
        }
        if (null !== $this->contactPhone) {
            $res['ContactPhone'] = $this->contactPhone;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProxyBrandUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProxyUserId'])) {
            $model->proxyUserId = $map['ProxyUserId'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['Company'])) {
            $model->company = $map['Company'];
        }
        if (isset($map['Industry'])) {
            $model->industry = $map['Industry'];
        }
        if (isset($map['BrandUserNick'])) {
            $model->brandUserNick = $map['BrandUserNick'];
        }
        if (isset($map['ContactPhone'])) {
            $model->contactPhone = $map['ContactPhone'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
