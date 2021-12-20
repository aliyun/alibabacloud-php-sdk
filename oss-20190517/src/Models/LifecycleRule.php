<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\SDK\Oss\V20190517\Models\LifecycleRule\lifecycleAbortMultipartUpload;
use AlibabaCloud\SDK\Oss\V20190517\Models\LifecycleRule\lifecycleExpiration;
use AlibabaCloud\SDK\Oss\V20190517\Models\LifecycleRule\lifecycleTransition;
use AlibabaCloud\SDK\Oss\V20190517\Models\LifecycleRule\noncurrentVersionExpiration;
use AlibabaCloud\SDK\Oss\V20190517\Models\LifecycleRule\noncurrentVersionTransition;
use AlibabaCloud\SDK\Oss\V20190517\Models\LifecycleRule\tag;
use AlibabaCloud\Tea\Model;

class LifecycleRule extends Model
{
    /**
     * @description 未完成分片上传的过期属性
     *
     * @var lifecycleAbortMultipartUpload
     */
    public $lifecycleAbortMultipartUpload;

    /**
     * @description 过期属性
     *
     * @var lifecycleExpiration
     */
    public $lifecycleExpiration;

    /**
     * @description 规则标识
     *
     * @var string
     */
    public $ID;

    /**
     * @description 非当前版本生命周期规则的过期属性
     *
     * @var noncurrentVersionExpiration
     */
    public $noncurrentVersionExpiration;

    /**
     * @description 非当前版本生命周期规则的转储属性
     *
     * @var noncurrentVersionTransition[]
     */
    public $noncurrentVersionTransition;

    /**
     * @description 指定规则所适用的前缀
     *
     * @var string
     */
    public $prefix;

    /**
     * @description 规则的状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 标签列表
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description 存储类型转换
     *
     * @var lifecycleTransition[]
     */
    public $lifecycleTransition;
    protected $_name = [
        'lifecycleAbortMultipartUpload' => 'AbortMultipartUpload',
        'lifecycleExpiration'           => 'Expiration',
        'ID'                            => 'ID',
        'noncurrentVersionExpiration'   => 'NoncurrentVersionExpiration',
        'noncurrentVersionTransition'   => 'NoncurrentVersionTransition',
        'prefix'                        => 'Prefix',
        'status'                        => 'Status',
        'tag'                           => 'Tag',
        'lifecycleTransition'           => 'Transition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lifecycleAbortMultipartUpload) {
            $res['AbortMultipartUpload'] = null !== $this->lifecycleAbortMultipartUpload ? $this->lifecycleAbortMultipartUpload->toMap() : null;
        }
        if (null !== $this->lifecycleExpiration) {
            $res['Expiration'] = null !== $this->lifecycleExpiration ? $this->lifecycleExpiration->toMap() : null;
        }
        if (null !== $this->ID) {
            $res['ID'] = $this->ID;
        }
        if (null !== $this->noncurrentVersionExpiration) {
            $res['NoncurrentVersionExpiration'] = null !== $this->noncurrentVersionExpiration ? $this->noncurrentVersionExpiration->toMap() : null;
        }
        if (null !== $this->noncurrentVersionTransition) {
            $res['NoncurrentVersionTransition'] = [];
            if (null !== $this->noncurrentVersionTransition && \is_array($this->noncurrentVersionTransition)) {
                $n = 0;
                foreach ($this->noncurrentVersionTransition as $item) {
                    $res['NoncurrentVersionTransition'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->lifecycleTransition) {
            $res['Transition'] = [];
            if (null !== $this->lifecycleTransition && \is_array($this->lifecycleTransition)) {
                $n = 0;
                foreach ($this->lifecycleTransition as $item) {
                    $res['Transition'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LifecycleRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbortMultipartUpload'])) {
            $model->lifecycleAbortMultipartUpload = lifecycleAbortMultipartUpload::fromMap($map['AbortMultipartUpload']);
        }
        if (isset($map['Expiration'])) {
            $model->lifecycleExpiration = lifecycleExpiration::fromMap($map['Expiration']);
        }
        if (isset($map['ID'])) {
            $model->ID = $map['ID'];
        }
        if (isset($map['NoncurrentVersionExpiration'])) {
            $model->noncurrentVersionExpiration = noncurrentVersionExpiration::fromMap($map['NoncurrentVersionExpiration']);
        }
        if (isset($map['NoncurrentVersionTransition'])) {
            if (!empty($map['NoncurrentVersionTransition'])) {
                $model->noncurrentVersionTransition = [];
                $n                                  = 0;
                foreach ($map['NoncurrentVersionTransition'] as $item) {
                    $model->noncurrentVersionTransition[$n++] = null !== $item ? noncurrentVersionTransition::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Transition'])) {
            if (!empty($map['Transition'])) {
                $model->lifecycleTransition = [];
                $n                          = 0;
                foreach ($map['Transition'] as $item) {
                    $model->lifecycleTransition[$n++] = null !== $item ? lifecycleTransition::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
