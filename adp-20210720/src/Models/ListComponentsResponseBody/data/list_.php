<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\ListComponentsResponseBody\data;

use AlibabaCloud\SDK\Adp\V20210720\Models\ListComponentsResponseBody\data\list_\annotations;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var annotations
     */
    public $annotations;

    /**
     * @example SAAS
     *
     * @var string
     */
    public $category;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $documents;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $provider;

    /**
     * @example false
     *
     * @var bool
     */
    public $public;

    /**
     * @example false
     *
     * @var bool
     */
    public $singleton;

    /**
     * @example aliyun-inc.com
     *
     * @var string
     */
    public $source;

    /**
     * @example 62cd4869-71b4-4c9f-b6c4-xxxxxxxxxxxx
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'annotations' => 'annotations',
        'category'    => 'category',
        'description' => 'description',
        'documents'   => 'documents',
        'name'        => 'name',
        'provider'    => 'provider',
        'public'      => 'public',
        'singleton'   => 'singleton',
        'source'      => 'source',
        'uid'         => 'uid',
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
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->documents) {
            $res['documents'] = $this->documents;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }
        if (null !== $this->public) {
            $res['public'] = $this->public;
        }
        if (null !== $this->singleton) {
            $res['singleton'] = $this->singleton;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
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
        if (isset($map['annotations'])) {
            $model->annotations = annotations::fromMap($map['annotations']);
        }
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['documents'])) {
            $model->documents = $map['documents'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }
        if (isset($map['public'])) {
            $model->public = $map['public'];
        }
        if (isset($map['singleton'])) {
            $model->singleton = $map['singleton'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
