<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\GetComponentResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example SAAS
     *
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $documents;

    /**
     * @example component-name
     *
     * @var string
     */
    public $name;

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
        'category'    => 'category',
        'description' => 'description',
        'documents'   => 'documents',
        'name'        => 'name',
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
