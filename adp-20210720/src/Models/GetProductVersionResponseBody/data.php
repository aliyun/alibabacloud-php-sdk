<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\GetProductVersionResponseBody;

use AlibabaCloud\SDK\Adp\V20210720\Models\GetProductVersionResponseBody\data\documentations;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetProductVersionResponseBody\data\extendedResources;
use AlibabaCloud\SDK\Adp\V20210720\Models\Platform;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $continuousIntegration;

    /**
     * @var string
     */
    public $description;

    /**
     * @var documentations[]
     */
    public $documentations;

    /**
     * @var extendedResources[]
     */
    public $extendedResources;

    /**
     * @var string
     */
    public $foundationVersionUID;

    /**
     * @var string
     */
    public $packageURL;

    /**
     * @var Platform[]
     */
    public $platforms;

    /**
     * @example test-product
     *
     * @var string
     */
    public $productName;

    /**
     * @example 54ccb2c9-3205-4159-8c44-xxxxxxxxxxxx
     *
     * @var string
     */
    public $productUID;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @example e61f944c-c021-46bd-a877-xxxxxxxxxxxx
     *
     * @var string
     */
    public $uid;

    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'continuousIntegration' => 'continuousIntegration',
        'description'           => 'description',
        'documentations'        => 'documentations',
        'extendedResources'     => 'extendedResources',
        'foundationVersionUID'  => 'foundationVersionUID',
        'packageURL'            => 'packageURL',
        'platforms'             => 'platforms',
        'productName'           => 'productName',
        'productUID'            => 'productUID',
        'provider'              => 'provider',
        'timeout'               => 'timeout',
        'uid'                   => 'uid',
        'version'               => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->continuousIntegration) {
            $res['continuousIntegration'] = $this->continuousIntegration;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->documentations) {
            $res['documentations'] = [];
            if (null !== $this->documentations && \is_array($this->documentations)) {
                $n = 0;
                foreach ($this->documentations as $item) {
                    $res['documentations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->extendedResources) {
            $res['extendedResources'] = [];
            if (null !== $this->extendedResources && \is_array($this->extendedResources)) {
                $n = 0;
                foreach ($this->extendedResources as $item) {
                    $res['extendedResources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->foundationVersionUID) {
            $res['foundationVersionUID'] = $this->foundationVersionUID;
        }
        if (null !== $this->packageURL) {
            $res['packageURL'] = $this->packageURL;
        }
        if (null !== $this->platforms) {
            $res['platforms'] = [];
            if (null !== $this->platforms && \is_array($this->platforms)) {
                $n = 0;
                foreach ($this->platforms as $item) {
                    $res['platforms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
        }
        if (null !== $this->productUID) {
            $res['productUID'] = $this->productUID;
        }
        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }
        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['continuousIntegration'])) {
            $model->continuousIntegration = $map['continuousIntegration'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['documentations'])) {
            if (!empty($map['documentations'])) {
                $model->documentations = [];
                $n                     = 0;
                foreach ($map['documentations'] as $item) {
                    $model->documentations[$n++] = null !== $item ? documentations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['extendedResources'])) {
            if (!empty($map['extendedResources'])) {
                $model->extendedResources = [];
                $n                        = 0;
                foreach ($map['extendedResources'] as $item) {
                    $model->extendedResources[$n++] = null !== $item ? extendedResources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['foundationVersionUID'])) {
            $model->foundationVersionUID = $map['foundationVersionUID'];
        }
        if (isset($map['packageURL'])) {
            $model->packageURL = $map['packageURL'];
        }
        if (isset($map['platforms'])) {
            if (!empty($map['platforms'])) {
                $model->platforms = [];
                $n                = 0;
                foreach ($map['platforms'] as $item) {
                    $model->platforms[$n++] = null !== $item ? Platform::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }
        if (isset($map['productUID'])) {
            $model->productUID = $map['productUID'];
        }
        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }
        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
