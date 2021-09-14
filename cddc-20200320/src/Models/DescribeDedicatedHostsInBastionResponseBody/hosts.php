<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostsInBastionResponseBody;

use AlibabaCloud\Tea\Model;

class hosts extends Model
{
    /**
     * @var string
     */
    public $hostDescription;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $bastionHostId;

    /**
     * @var string
     */
    public $osName;

    /**
     * @var string
     */
    public $hostAccountCount;

    /**
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @var string
     */
    public $hostPrivateIp;

    /**
     * @var bool
     */
    public $accountCreating;

    /**
     * @var string
     */
    public $accountName;
    protected $_name = [
        'hostDescription'  => 'HostDescription',
        'comment'          => 'Comment',
        'bastionHostId'    => 'BastionHostId',
        'osName'           => 'OsName',
        'hostAccountCount' => 'HostAccountCount',
        'dedicatedHostId'  => 'DedicatedHostId',
        'hostPrivateIp'    => 'HostPrivateIp',
        'accountCreating'  => 'AccountCreating',
        'accountName'      => 'AccountName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostDescription) {
            $res['HostDescription'] = $this->hostDescription;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->bastionHostId) {
            $res['BastionHostId'] = $this->bastionHostId;
        }
        if (null !== $this->osName) {
            $res['OsName'] = $this->osName;
        }
        if (null !== $this->hostAccountCount) {
            $res['HostAccountCount'] = $this->hostAccountCount;
        }
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->hostPrivateIp) {
            $res['HostPrivateIp'] = $this->hostPrivateIp;
        }
        if (null !== $this->accountCreating) {
            $res['AccountCreating'] = $this->accountCreating;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hosts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostDescription'])) {
            $model->hostDescription = $map['HostDescription'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['BastionHostId'])) {
            $model->bastionHostId = $map['BastionHostId'];
        }
        if (isset($map['OsName'])) {
            $model->osName = $map['OsName'];
        }
        if (isset($map['HostAccountCount'])) {
            $model->hostAccountCount = $map['HostAccountCount'];
        }
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['HostPrivateIp'])) {
            $model->hostPrivateIp = $map['HostPrivateIp'];
        }
        if (isset($map['AccountCreating'])) {
            $model->accountCreating = $map['AccountCreating'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        return $model;
    }
}
