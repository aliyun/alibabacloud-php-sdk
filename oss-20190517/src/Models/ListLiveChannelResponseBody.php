<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ListLiveChannelResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isTruncated;

    /**
     * @var LiveChannel[]
     */
    public $liveChannels;

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
     * @var string
     */
    public $prefix;
    protected $_name = [
        'isTruncated'  => 'IsTruncated',
        'liveChannels' => 'LiveChannel',
        'marker'       => 'Marker',
        'maxKeys'      => 'MaxKeys',
        'nextMarker'   => 'NextMarker',
        'prefix'       => 'Prefix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }
        if (null !== $this->liveChannels) {
            $res['LiveChannel'] = [];
            if (null !== $this->liveChannels && \is_array($this->liveChannels)) {
                $n = 0;
                foreach ($this->liveChannels as $item) {
                    $res['LiveChannel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->maxKeys) {
            $res['MaxKeys'] = $this->maxKeys;
        }
        if (null !== $this->nextMarker) {
            $res['NextMarker'] = $this->nextMarker;
        }
        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLiveChannelResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }
        if (isset($map['LiveChannel'])) {
            if (!empty($map['LiveChannel'])) {
                $model->liveChannels = [];
                $n                   = 0;
                foreach ($map['LiveChannel'] as $item) {
                    $model->liveChannels[$n++] = null !== $item ? LiveChannel::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['MaxKeys'])) {
            $model->maxKeys = $map['MaxKeys'];
        }
        if (isset($map['NextMarker'])) {
            $model->nextMarker = $map['NextMarker'];
        }
        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }

        return $model;
    }
}
