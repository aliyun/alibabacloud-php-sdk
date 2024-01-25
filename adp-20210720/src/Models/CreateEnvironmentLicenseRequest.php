<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\SDK\Adp\V20210720\Models\CreateEnvironmentLicenseRequest\licenseQuota;
use AlibabaCloud\Tea\Model;

class CreateEnvironmentLicenseRequest extends Model
{
    /**
     * @var string
     */
    public $companyName;

    /**
     * @example 188xxxxxxxx
     *
     * @var string
     */
    public $contact;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var licenseQuota
     */
    public $licenseQuota;

    /**
     * @example xxxxx
     *
     * @var string
     */
    public $machineFingerprint;

    /**
     * @var string
     */
    public $name;

    /**
     * @example e61f944c-c021-46bd-a877-xxxxxxxxxxxx
     *
     * @var string
     */
    public $productVersionUID;

    /**
     * @var string
     */
    public $scenario;

    /**
     * @example foundation
     *
     * @var string
     */
    public $scope;

    /**
     * @example OnTrial,Production
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'companyName'        => 'companyName',
        'contact'            => 'contact',
        'description'        => 'description',
        'expireTime'         => 'expireTime',
        'licenseQuota'       => 'licenseQuota',
        'machineFingerprint' => 'machineFingerprint',
        'name'               => 'name',
        'productVersionUID'  => 'productVersionUID',
        'scenario'           => 'scenario',
        'scope'              => 'scope',
        'type'               => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->companyName) {
            $res['companyName'] = $this->companyName;
        }
        if (null !== $this->contact) {
            $res['contact'] = $this->contact;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->expireTime) {
            $res['expireTime'] = $this->expireTime;
        }
        if (null !== $this->licenseQuota) {
            $res['licenseQuota'] = null !== $this->licenseQuota ? $this->licenseQuota->toMap() : null;
        }
        if (null !== $this->machineFingerprint) {
            $res['machineFingerprint'] = $this->machineFingerprint;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->productVersionUID) {
            $res['productVersionUID'] = $this->productVersionUID;
        }
        if (null !== $this->scenario) {
            $res['scenario'] = $this->scenario;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEnvironmentLicenseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['companyName'])) {
            $model->companyName = $map['companyName'];
        }
        if (isset($map['contact'])) {
            $model->contact = $map['contact'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['expireTime'])) {
            $model->expireTime = $map['expireTime'];
        }
        if (isset($map['licenseQuota'])) {
            $model->licenseQuota = licenseQuota::fromMap($map['licenseQuota']);
        }
        if (isset($map['machineFingerprint'])) {
            $model->machineFingerprint = $map['machineFingerprint'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['productVersionUID'])) {
            $model->productVersionUID = $map['productVersionUID'];
        }
        if (isset($map['scenario'])) {
            $model->scenario = $map['scenario'];
        }
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
