<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeActivationCodeDetailsResponseBody extends Model
{
    /**
     * @description The time when the activation code takes effect.
     *
     * @example 2024-10-16 16:46:20
     *
     * @var string
     */
    public $activateAt;

    /**
     * @description The activation code in the base64 format. The activation code is decoded and stored into a file named license.lic. PolarDB can access and read the license.lic file upon startup to validate the license or perform related operations.
     *
     * @example AAEAA******AAA=
     *
     * @var string
     */
    public $certContentB64;

    /**
     * @description The description of the activation code.
     *
     * @example testCode
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the activation code expires.
     *
     * @example 2054-10-09 16:46:20
     *
     * @var string
     */
    public $expireAt;

    /**
     * @description The time when the activation code was created.
     *
     * @example 2024-10-16 16:46:20
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @description The time when the activation code was last updated.
     *
     * @example 2024-10-16 16:46:20
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the activation code.
     *
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @description The MAC address.
     *
     * @example 12:34:56:78:98:00
     *
     * @var string
     */
    public $macAddress;

    /**
     * @description The name of the activation code.
     *
     * @example testName
     *
     * @var string
     */
    public $name;

    /**
     * @description The request ID.
     *
     * @example F2A9EFA7-915F-4572-8299-85A307******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The system identifier of the database.
     *
     * @example 1234567890123456
     *
     * @var string
     */
    public $systemIdentifier;
    protected $_name = [
        'activateAt' => 'ActivateAt',
        'certContentB64' => 'CertContentB64',
        'description' => 'Description',
        'expireAt' => 'ExpireAt',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'macAddress' => 'MacAddress',
        'name' => 'Name',
        'requestId' => 'RequestId',
        'systemIdentifier' => 'SystemIdentifier',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->activateAt) {
            $res['ActivateAt'] = $this->activateAt;
        }
        if (null !== $this->certContentB64) {
            $res['CertContentB64'] = $this->certContentB64;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expireAt) {
            $res['ExpireAt'] = $this->expireAt;
        }
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->macAddress) {
            $res['MacAddress'] = $this->macAddress;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->systemIdentifier) {
            $res['SystemIdentifier'] = $this->systemIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeActivationCodeDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivateAt'])) {
            $model->activateAt = $map['ActivateAt'];
        }
        if (isset($map['CertContentB64'])) {
            $model->certContentB64 = $map['CertContentB64'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExpireAt'])) {
            $model->expireAt = $map['ExpireAt'];
        }
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MacAddress'])) {
            $model->macAddress = $map['MacAddress'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SystemIdentifier'])) {
            $model->systemIdentifier = $map['SystemIdentifier'];
        }

        return $model;
    }
}
