<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\SDK\Oss\V20190517\Models\LifecycleRule\filter;
use AlibabaCloud\SDK\Oss\V20190517\Models\LifecycleRule\lifecycleAbortMultipartUpload;
use AlibabaCloud\SDK\Oss\V20190517\Models\LifecycleRule\lifecycleExpiration;
use AlibabaCloud\SDK\Oss\V20190517\Models\LifecycleRule\lifecycleTransition;
use AlibabaCloud\SDK\Oss\V20190517\Models\LifecycleRule\noncurrentVersionExpiration;
use AlibabaCloud\SDK\Oss\V20190517\Models\LifecycleRule\noncurrentVersionTransition;
use AlibabaCloud\Tea\Model;

class LifecycleRule extends Model
{
    /**
     * @var lifecycleAbortMultipartUpload
     */
    public $lifecycleAbortMultipartUpload;

    /**
     * @var lifecycleExpiration
     */
    public $lifecycleExpiration;

    /**
     * @var filter
     */
    public $filter;

    /**
     * @var string
     */
    public $ID;

    /**
     * @var noncurrentVersionExpiration
     */
    public $noncurrentVersionExpiration;

    /**
     * @var noncurrentVersionTransition[]
     */
    public $noncurrentVersionTransition;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var string
     */
    public $status;

    /**
     * @var Tag[]
     */
    public $tag;

    /**
     * @var lifecycleTransition[]
     */
    public $lifecycleTransition;
    protected $_name = [
        'lifecycleAbortMultipartUpload' => 'AbortMultipartUpload',
        'lifecycleExpiration'           => 'Expiration',
        'filter'                        => 'Filter',
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
        if (null !== $this->filter) {
            $res['Filter'] = null !== $this->filter ? $this->filter->toMap() : null;
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
        if (isset($map['Filter'])) {
            $model->filter = filter::fromMap($map['Filter']);
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
                    $model->tag[$n++] = null !== $item ? Tag::fromMap($item) : $item;
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
