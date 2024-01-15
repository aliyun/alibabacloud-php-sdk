<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkitemFileResponseBody;

use AlibabaCloud\Tea\Model;

class workitemFile extends Model
{
    /**
     * @example sddrdfdf123df
     *
     * @var string
     */
    public $id;

    /**
     * @example ddc.pdf
     *
     * @var string
     */
    public $name;

    /**
     * @example 10001
     *
     * @var int
     */
    public $size;

    /**
     * @example pdf
     *
     * @var string
     */
    public $suffix;

    /**
     * @example http://tmaestro-oss.oss-cn-hongkong.aliyuncs.com/thread_1682129288279.log
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'id'     => 'id',
        'name'   => 'name',
        'size'   => 'size',
        'suffix' => 'suffix',
        'url'    => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->suffix) {
            $res['suffix'] = $this->suffix;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workitemFile
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['suffix'])) {
            $model->suffix = $map['suffix'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
