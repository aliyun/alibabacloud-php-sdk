<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20180713\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserCertificateDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $fingerprint;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var bool
     */
    public $expired;

    /**
     * @var string
     */
    public $orgName;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $province;

    /**
     * @var bool
     */
    public $buyInAliyun;

    /**
     * @var string
     */
    public $common;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $sans;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $cert;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $key;
    protected $_name = [
        'fingerprint' => 'Fingerprint',
        'requestId'   => 'RequestId',
        'issuer'      => 'Issuer',
        'expired'     => 'Expired',
        'orgName'     => 'OrgName',
        'city'        => 'City',
        'endDate'     => 'EndDate',
        'province'    => 'Province',
        'buyInAliyun' => 'BuyInAliyun',
        'common'      => 'Common',
        'name'        => 'Name',
        'startDate'   => 'StartDate',
        'sans'        => 'Sans',
        'country'     => 'Country',
        'cert'        => 'Cert',
        'id'          => 'Id',
        'key'         => 'Key',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fingerprint) {
            $res['Fingerprint'] = $this->fingerprint;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->buyInAliyun) {
            $res['BuyInAliyun'] = $this->buyInAliyun;
        }
        if (null !== $this->common) {
            $res['Common'] = $this->common;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->sans) {
            $res['Sans'] = $this->sans;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->cert) {
            $res['Cert'] = $this->cert;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserCertificateDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Fingerprint'])) {
            $model->fingerprint = $map['Fingerprint'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['BuyInAliyun'])) {
            $model->buyInAliyun = $map['BuyInAliyun'];
        }
        if (isset($map['Common'])) {
            $model->common = $map['Common'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['Sans'])) {
            $model->sans = $map['Sans'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['Cert'])) {
            $model->cert = $map['Cert'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        return $model;
    }
}
