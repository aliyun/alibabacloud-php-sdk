<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ListBucketsResponseBody extends Model
{
    /**
     * @var Bucket[]
     */
    public $buckets;

    /**
     * @var bool
     */
    public $isTruncated;

    /**
     * @var string
     */
    public $marker;

    /**
     * @var int
     */
    public $maxKeys;

    /**
     * @var string
     */
    public $nextMarker;

    /**
     * @var Owner
     */
    public $owner;

    /**
     * @var string
     */
    public $prefix;
    protected $_name = [
        'buckets'     => 'buckets',
        'isTruncated' => 'isTruncated',
        'marker'      => 'marker',
        'maxKeys'     => 'maxKeys',
        'nextMarker'  => 'nextMarker',
        'owner'       => 'owner',
        'prefix'      => 'prefix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buckets) {
            $res['buckets'] = [];
            if (null !== $this->buckets && \is_array($this->buckets)) {
                $n = 0;
                foreach ($this->buckets as $item) {
                    $res['buckets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->isTruncated) {
            $res['isTruncated'] = $this->isTruncated;
        }
        if (null !== $this->marker) {
            $res['marker'] = $this->marker;
        }
        if (null !== $this->maxKeys) {
            $res['maxKeys'] = $this->maxKeys;
        }
        if (null !== $this->nextMarker) {
            $res['nextMarker'] = $this->nextMarker;
        }
        if (null !== $this->owner) {
            $res['owner'] = null !== $this->owner ? $this->owner->toMap() : null;
        }
        if (null !== $this->prefix) {
            $res['prefix'] = $this->prefix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBucketsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['buckets'])) {
            if (!empty($map['buckets'])) {
                $model->buckets = [];
                $n              = 0;
                foreach ($map['buckets'] as $item) {
                    $model->buckets[$n++] = null !== $item ? Bucket::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['isTruncated'])) {
            $model->isTruncated = $map['isTruncated'];
        }
        if (isset($map['marker'])) {
            $model->marker = $map['marker'];
        }
        if (isset($map['maxKeys'])) {
            $model->maxKeys = $map['maxKeys'];
        }
        if (isset($map['nextMarker'])) {
            $model->nextMarker = $map['nextMarker'];
        }
        if (isset($map['owner'])) {
            $model->owner = Owner::fromMap($map['owner']);
        }
        if (isset($map['prefix'])) {
            $model->prefix = $map['prefix'];
        }

        return $model;
    }
}
