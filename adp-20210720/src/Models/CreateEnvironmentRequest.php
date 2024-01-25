<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\SDK\Adp\V20210720\Models\CreateEnvironmentRequest\platform;
use AlibabaCloud\Tea\Model;

class CreateEnvironmentRequest extends Model
{
    /**
     * @var string
     */
    public $annotations;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $expiredAt;

    /**
     * @var string
     */
    public $location;

    /**
     * @example env-demo
     *
     * @var string
     */
    public $name;

    /**
     * @var platform
     */
    public $platform;

    /**
     * @var \AlibabaCloud\SDK\Adp\V20210720\Models\Platform[]
     */
    public $platformList;

    /**
     * @example 2c87c449-7f5e-4ee6-9bb3-xxx
     *
     * @var string
     */
    public $productVersionUID;

    /**
     * @example production
     *
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $vendorConfig;

    /**
     * @example alicloud
     *
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'annotations'       => 'annotations',
        'description'       => 'description',
        'expiredAt'         => 'expiredAt',
        'location'          => 'location',
        'name'              => 'name',
        'platform'          => 'platform',
        'platformList'      => 'platformList',
        'productVersionUID' => 'productVersionUID',
        'type'              => 'type',
        'vendorConfig'      => 'vendorConfig',
        'vendorType'        => 'vendorType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotations) {
            $res['annotations'] = $this->annotations;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->expiredAt) {
            $res['expiredAt'] = $this->expiredAt;
        }
        if (null !== $this->location) {
            $res['location'] = $this->location;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->platform) {
            $res['platform'] = null !== $this->platform ? $this->platform->toMap() : null;
        }
        if (null !== $this->platformList) {
            $res['platformList'] = [];
            if (null !== $this->platformList && \is_array($this->platformList)) {
                $n = 0;
                foreach ($this->platformList as $item) {
                    $res['platformList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->productVersionUID) {
            $res['productVersionUID'] = $this->productVersionUID;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->vendorConfig) {
            $res['vendorConfig'] = $this->vendorConfig;
        }
        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEnvironmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['annotations'])) {
            $model->annotations = $map['annotations'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['expiredAt'])) {
            $model->expiredAt = $map['expiredAt'];
        }
        if (isset($map['location'])) {
            $model->location = $map['location'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['platform'])) {
            $model->platform = platform::fromMap($map['platform']);
        }
        if (isset($map['platformList'])) {
            if (!empty($map['platformList'])) {
                $model->platformList = [];
                $n                   = 0;
                foreach ($map['platformList'] as $item) {
                    $model->platformList[$n++] = null !== $item ? \AlibabaCloud\SDK\Adp\V20210720\Models\Platform::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['productVersionUID'])) {
            $model->productVersionUID = $map['productVersionUID'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['vendorConfig'])) {
            $model->vendorConfig = $map['vendorConfig'];
        }
        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
