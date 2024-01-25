<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\ListProductInstancesResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $clusterUID;

    /**
     * @var bool
     */
    public $continuousDeployment;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @example demo-product
     *
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $productUID;

    /**
     * @example v1.0.0
     *
     * @var string
     */
    public $productVersion;

    /**
     * @var string
     */
    public $productVersionSpecUID;

    /**
     * @example 17c62480-8d60-482d-b1bc-xxx
     *
     * @var string
     */
    public $productVersionUID;

    /**
     * @example INITIALIZING
     *
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @example 7f15e716-acfe-4ebe-8def-xxx
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'clusterUID'            => 'clusterUID',
        'continuousDeployment'  => 'continuousDeployment',
        'namespace'             => 'namespace',
        'productName'           => 'productName',
        'productUID'            => 'productUID',
        'productVersion'        => 'productVersion',
        'productVersionSpecUID' => 'productVersionSpecUID',
        'productVersionUID'     => 'productVersionUID',
        'status'                => 'status',
        'timeout'               => 'timeout',
        'uid'                   => 'uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterUID) {
            $res['clusterUID'] = $this->clusterUID;
        }
        if (null !== $this->continuousDeployment) {
            $res['continuousDeployment'] = $this->continuousDeployment;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
        }
        if (null !== $this->productUID) {
            $res['productUID'] = $this->productUID;
        }
        if (null !== $this->productVersion) {
            $res['productVersion'] = $this->productVersion;
        }
        if (null !== $this->productVersionSpecUID) {
            $res['productVersionSpecUID'] = $this->productVersionSpecUID;
        }
        if (null !== $this->productVersionUID) {
            $res['productVersionUID'] = $this->productVersionUID;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
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
        if (isset($map['clusterUID'])) {
            $model->clusterUID = $map['clusterUID'];
        }
        if (isset($map['continuousDeployment'])) {
            $model->continuousDeployment = $map['continuousDeployment'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }
        if (isset($map['productUID'])) {
            $model->productUID = $map['productUID'];
        }
        if (isset($map['productVersion'])) {
            $model->productVersion = $map['productVersion'];
        }
        if (isset($map['productVersionSpecUID'])) {
            $model->productVersionSpecUID = $map['productVersionSpecUID'];
        }
        if (isset($map['productVersionUID'])) {
            $model->productVersionUID = $map['productVersionUID'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
