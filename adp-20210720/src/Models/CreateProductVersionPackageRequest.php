<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class CreateProductVersionPackageRequest extends Model
{
    /**
     * @example TRIDENT
     *
     * @var string
     */
    public $clusterEngineType;

    /**
     * @var string
     */
    public $foundationReferenceUID;

    /**
     * @var string
     */
    public $oldFoundationReferenceUID;

    /**
     * @example 5f1261e4-7462-48d8-8f9d-xxxxxxxxxxxx
     *
     * @var string
     */
    public $oldProductVersionUID;

    /**
     * @example all
     *
     * @var string
     */
    public $packageContentType;

    /**
     * @example Hopctl
     *
     * @var string
     */
    public $packageToolType;

    /**
     * @example full
     *
     * @var string
     */
    public $packageType;

    /**
     * @example linux/amd64
     *
     * @var string
     */
    public $platform;
    protected $_name = [
        'clusterEngineType'         => 'clusterEngineType',
        'foundationReferenceUID'    => 'foundationReferenceUID',
        'oldFoundationReferenceUID' => 'oldFoundationReferenceUID',
        'oldProductVersionUID'      => 'oldProductVersionUID',
        'packageContentType'        => 'packageContentType',
        'packageToolType'           => 'packageToolType',
        'packageType'               => 'packageType',
        'platform'                  => 'platform',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterEngineType) {
            $res['clusterEngineType'] = $this->clusterEngineType;
        }
        if (null !== $this->foundationReferenceUID) {
            $res['foundationReferenceUID'] = $this->foundationReferenceUID;
        }
        if (null !== $this->oldFoundationReferenceUID) {
            $res['oldFoundationReferenceUID'] = $this->oldFoundationReferenceUID;
        }
        if (null !== $this->oldProductVersionUID) {
            $res['oldProductVersionUID'] = $this->oldProductVersionUID;
        }
        if (null !== $this->packageContentType) {
            $res['packageContentType'] = $this->packageContentType;
        }
        if (null !== $this->packageToolType) {
            $res['packageToolType'] = $this->packageToolType;
        }
        if (null !== $this->packageType) {
            $res['packageType'] = $this->packageType;
        }
        if (null !== $this->platform) {
            $res['platform'] = $this->platform;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProductVersionPackageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clusterEngineType'])) {
            $model->clusterEngineType = $map['clusterEngineType'];
        }
        if (isset($map['foundationReferenceUID'])) {
            $model->foundationReferenceUID = $map['foundationReferenceUID'];
        }
        if (isset($map['oldFoundationReferenceUID'])) {
            $model->oldFoundationReferenceUID = $map['oldFoundationReferenceUID'];
        }
        if (isset($map['oldProductVersionUID'])) {
            $model->oldProductVersionUID = $map['oldProductVersionUID'];
        }
        if (isset($map['packageContentType'])) {
            $model->packageContentType = $map['packageContentType'];
        }
        if (isset($map['packageToolType'])) {
            $model->packageToolType = $map['packageToolType'];
        }
        if (isset($map['packageType'])) {
            $model->packageType = $map['packageType'];
        }
        if (isset($map['platform'])) {
            $model->platform = $map['platform'];
        }

        return $model;
    }
}
