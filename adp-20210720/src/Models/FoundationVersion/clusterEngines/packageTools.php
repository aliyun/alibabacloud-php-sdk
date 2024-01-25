<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\FoundationVersion\clusterEngines;

use AlibabaCloud\SDK\Adp\V20210720\Models\FoundationVersion\clusterEngines\packageTools\installToolPackages;
use AlibabaCloud\Tea\Model;

class packageTools extends Model
{
    /**
     * @var string
     */
    public $image;

    /**
     * @var installToolPackages[]
     */
    public $installToolPackages;

    /**
     * @var string
     */
    public $name;

    /**
     * @example ENUM:["HopctlPackage","CloudImage"]
     *
     * @var string
     */
    public $packageFormat;

    /**
     * @example ENUM:["Hopctl","HopctlSealer"]
     *
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'image'               => 'image',
        'installToolPackages' => 'installToolPackages',
        'name'                => 'name',
        'packageFormat'       => 'packageFormat',
        'type'                => 'type',
        'version'             => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->image) {
            $res['image'] = $this->image;
        }
        if (null !== $this->installToolPackages) {
            $res['installToolPackages'] = [];
            if (null !== $this->installToolPackages && \is_array($this->installToolPackages)) {
                $n = 0;
                foreach ($this->installToolPackages as $item) {
                    $res['installToolPackages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->packageFormat) {
            $res['packageFormat'] = $this->packageFormat;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return packageTools
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['image'])) {
            $model->image = $map['image'];
        }
        if (isset($map['installToolPackages'])) {
            if (!empty($map['installToolPackages'])) {
                $model->installToolPackages = [];
                $n                          = 0;
                foreach ($map['installToolPackages'] as $item) {
                    $model->installToolPackages[$n++] = null !== $item ? installToolPackages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['packageFormat'])) {
            $model->packageFormat = $map['packageFormat'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
