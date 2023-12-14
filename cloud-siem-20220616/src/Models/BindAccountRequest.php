<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class BindAccountRequest extends Model
{
    /**
     * @example ABCXXXXXXXX
     *
     * @var string
     */
    public $accessId;

    /**
     * @example 123xxxxxxx
     *
     * @var string
     */
    public $accountId;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $accountName;

    /**
     * @example hcloud
     *
     * @var string
     */
    public $cloudCode;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'accessId'    => 'AccessId',
        'accountId'   => 'AccountId',
        'accountName' => 'AccountName',
        'cloudCode'   => 'CloudCode',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessId) {
            $res['AccessId'] = $this->accessId;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->cloudCode) {
            $res['CloudCode'] = $this->cloudCode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['CloudCode'])) {
            $model->cloudCode = $map['CloudCode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
