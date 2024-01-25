<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\ListProductVersionsResponseBody\data;

use AlibabaCloud\SDK\Adp\V20210720\Models\ListProductVersionsResponseBody\data\list_\annotations;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListProductVersionsResponseBody\data\list_\tags;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var annotations
     */
    public $annotations;

    /**
     * @example test product version
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $packageURL;

    /**
     * @example test
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
     * @var string
     */
    public $releasedAt;

    /**
     * @var tags[]
     */
    public $tags;

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
        'annotations' => 'annotations',
        'description' => 'description',
        'packageURL'  => 'packageURL',
        'productName' => 'productName',
        'productUID'  => 'productUID',
        'provider'    => 'provider',
        'releasedAt'  => 'releasedAt',
        'tags'        => 'tags',
        'uid'         => 'uid',
        'version'     => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotations) {
            $res['annotations'] = null !== $this->annotations ? $this->annotations->toMap() : null;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->packageURL) {
            $res['packageURL'] = $this->packageURL;
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
        if (null !== $this->releasedAt) {
            $res['releasedAt'] = $this->releasedAt;
        }
        if (null !== $this->tags) {
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['annotations'])) {
            $model->annotations = annotations::fromMap($map['annotations']);
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['packageURL'])) {
            $model->packageURL = $map['packageURL'];
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
        if (isset($map['releasedAt'])) {
            $model->releasedAt = $map['releasedAt'];
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
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
