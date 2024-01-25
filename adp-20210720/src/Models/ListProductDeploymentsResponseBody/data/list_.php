<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\ListProductDeploymentsResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $envParams;

    /**
     * @example b8ec63af-7859-4464-9cff-xxx
     *
     * @var string
     */
    public $envUID;

    /**
     * @example 1.0.1
     *
     * @var string
     */
    public $oldProductVersion;

    /**
     * @example all
     *
     * @var string
     */
    public $packageContentType;

    /**
     * @example dc78905e-f03f-4759-932e-xxx
     *
     * @var string
     */
    public $packageInfoUID;

    /**
     * @example full
     *
     * @var string
     */
    public $packageType;

    /**
     * @example demo-product
     *
     * @var string
     */
    public $productName;

    /**
     * @example 1.0.2
     *
     * @var string
     */
    public $productVersion;

    /**
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @example 5699b683-075a-4c51-a78c-xxx
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'envParams'          => 'envParams',
        'envUID'             => 'envUID',
        'oldProductVersion'  => 'oldProductVersion',
        'packageContentType' => 'packageContentType',
        'packageInfoUID'     => 'packageInfoUID',
        'packageType'        => 'packageType',
        'productName'        => 'productName',
        'productVersion'     => 'productVersion',
        'status'             => 'status',
        'uid'                => 'uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->envParams) {
            $res['envParams'] = $this->envParams;
        }
        if (null !== $this->envUID) {
            $res['envUID'] = $this->envUID;
        }
        if (null !== $this->oldProductVersion) {
            $res['oldProductVersion'] = $this->oldProductVersion;
        }
        if (null !== $this->packageContentType) {
            $res['packageContentType'] = $this->packageContentType;
        }
        if (null !== $this->packageInfoUID) {
            $res['packageInfoUID'] = $this->packageInfoUID;
        }
        if (null !== $this->packageType) {
            $res['packageType'] = $this->packageType;
        }
        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
        }
        if (null !== $this->productVersion) {
            $res['productVersion'] = $this->productVersion;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['envParams'])) {
            $model->envParams = $map['envParams'];
        }
        if (isset($map['envUID'])) {
            $model->envUID = $map['envUID'];
        }
        if (isset($map['oldProductVersion'])) {
            $model->oldProductVersion = $map['oldProductVersion'];
        }
        if (isset($map['packageContentType'])) {
            $model->packageContentType = $map['packageContentType'];
        }
        if (isset($map['packageInfoUID'])) {
            $model->packageInfoUID = $map['packageInfoUID'];
        }
        if (isset($map['packageType'])) {
            $model->packageType = $map['packageType'];
        }
        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }
        if (isset($map['productVersion'])) {
            $model->productVersion = $map['productVersion'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
