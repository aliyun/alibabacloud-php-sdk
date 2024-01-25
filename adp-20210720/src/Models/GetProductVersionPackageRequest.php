<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class GetProductVersionPackageRequest extends Model
{
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
     * @example full
     *
     * @var string
     */
    public $packageType;

    /**
     * @example 1c33e7b7-2df8-4632-9f94-xxxxxxxxxxxx
     *
     * @var string
     */
    public $packageUID;

    /**
     * @example linux/amd64
     *
     * @var string
     */
    public $platform;

    /**
     * @example true
     *
     * @var bool
     */
    public $withURL;
    protected $_name = [
        'foundationReferenceUID'    => 'foundationReferenceUID',
        'oldFoundationReferenceUID' => 'oldFoundationReferenceUID',
        'oldProductVersionUID'      => 'oldProductVersionUID',
        'packageContentType'        => 'packageContentType',
        'packageType'               => 'packageType',
        'packageUID'                => 'packageUID',
        'platform'                  => 'platform',
        'withURL'                   => 'withURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->packageType) {
            $res['packageType'] = $this->packageType;
        }
        if (null !== $this->packageUID) {
            $res['packageUID'] = $this->packageUID;
        }
        if (null !== $this->platform) {
            $res['platform'] = $this->platform;
        }
        if (null !== $this->withURL) {
            $res['withURL'] = $this->withURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProductVersionPackageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['packageType'])) {
            $model->packageType = $map['packageType'];
        }
        if (isset($map['packageUID'])) {
            $model->packageUID = $map['packageUID'];
        }
        if (isset($map['platform'])) {
            $model->platform = $map['platform'];
        }
        if (isset($map['withURL'])) {
            $model->withURL = $map['withURL'];
        }

        return $model;
    }
}
