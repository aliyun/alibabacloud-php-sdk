<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20180713\Models\DescribeUserCertificateListResponseBody;

use AlibabaCloud\Tea\Model;

class certificateList extends Model
{
    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $sans;

    /**
     * @var string
     */
    public $common;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var bool
     */
    public $buyInAliyun;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var bool
     */
    public $expired;

    /**
     * @var string
     */
    public $fingerprint;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $orgName;
    protected $_name = [
        'startDate'   => 'startDate',
        'province'    => 'province',
        'sans'        => 'sans',
        'common'      => 'common',
        'id'          => 'id',
        'country'     => 'country',
        'issuer'      => 'issuer',
        'buyInAliyun' => 'buyInAliyun',
        'endDate'     => 'endDate',
        'expired'     => 'expired',
        'fingerprint' => 'fingerprint',
        'name'        => 'name',
        'city'        => 'city',
        'orgName'     => 'orgName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startDate) {
            $res['startDate'] = $this->startDate;
        }
        if (null !== $this->province) {
            $res['province'] = $this->province;
        }
        if (null !== $this->sans) {
            $res['sans'] = $this->sans;
        }
        if (null !== $this->common) {
            $res['common'] = $this->common;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->country) {
            $res['country'] = $this->country;
        }
        if (null !== $this->issuer) {
            $res['issuer'] = $this->issuer;
        }
        if (null !== $this->buyInAliyun) {
            $res['buyInAliyun'] = $this->buyInAliyun;
        }
        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }
        if (null !== $this->expired) {
            $res['expired'] = $this->expired;
        }
        if (null !== $this->fingerprint) {
            $res['fingerprint'] = $this->fingerprint;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->city) {
            $res['city'] = $this->city;
        }
        if (null !== $this->orgName) {
            $res['orgName'] = $this->orgName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certificateList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['startDate'])) {
            $model->startDate = $map['startDate'];
        }
        if (isset($map['province'])) {
            $model->province = $map['province'];
        }
        if (isset($map['sans'])) {
            $model->sans = $map['sans'];
        }
        if (isset($map['common'])) {
            $model->common = $map['common'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['country'])) {
            $model->country = $map['country'];
        }
        if (isset($map['issuer'])) {
            $model->issuer = $map['issuer'];
        }
        if (isset($map['buyInAliyun'])) {
            $model->buyInAliyun = $map['buyInAliyun'];
        }
        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }
        if (isset($map['expired'])) {
            $model->expired = $map['expired'];
        }
        if (isset($map['fingerprint'])) {
            $model->fingerprint = $map['fingerprint'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['city'])) {
            $model->city = $map['city'];
        }
        if (isset($map['orgName'])) {
            $model->orgName = $map['orgName'];
        }

        return $model;
    }
}
