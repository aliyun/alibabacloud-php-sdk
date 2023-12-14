<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListHiveColumnLineagesResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListHiveColumnLineagesResponseBody\data\downstreamLineages;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListHiveColumnLineagesResponseBody\data\upstreamLineages;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var downstreamLineages[]
     */
    public $downstreamLineages;

    /**
     * @example 3
     *
     * @var int
     */
    public $downstreamNumber;

    /**
     * @var upstreamLineages[]
     */
    public $upstreamLineages;

    /**
     * @example 0
     *
     * @var int
     */
    public $upstreamNumber;
    protected $_name = [
        'downstreamLineages' => 'DownstreamLineages',
        'downstreamNumber'   => 'DownstreamNumber',
        'upstreamLineages'   => 'UpstreamLineages',
        'upstreamNumber'     => 'UpstreamNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downstreamLineages) {
            $res['DownstreamLineages'] = [];
            if (null !== $this->downstreamLineages && \is_array($this->downstreamLineages)) {
                $n = 0;
                foreach ($this->downstreamLineages as $item) {
                    $res['DownstreamLineages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->downstreamNumber) {
            $res['DownstreamNumber'] = $this->downstreamNumber;
        }
        if (null !== $this->upstreamLineages) {
            $res['UpstreamLineages'] = [];
            if (null !== $this->upstreamLineages && \is_array($this->upstreamLineages)) {
                $n = 0;
                foreach ($this->upstreamLineages as $item) {
                    $res['UpstreamLineages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->upstreamNumber) {
            $res['UpstreamNumber'] = $this->upstreamNumber;
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
        if (isset($map['DownstreamLineages'])) {
            if (!empty($map['DownstreamLineages'])) {
                $model->downstreamLineages = [];
                $n                         = 0;
                foreach ($map['DownstreamLineages'] as $item) {
                    $model->downstreamLineages[$n++] = null !== $item ? downstreamLineages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DownstreamNumber'])) {
            $model->downstreamNumber = $map['DownstreamNumber'];
        }
        if (isset($map['UpstreamLineages'])) {
            if (!empty($map['UpstreamLineages'])) {
                $model->upstreamLineages = [];
                $n                       = 0;
                foreach ($map['UpstreamLineages'] as $item) {
                    $model->upstreamLineages[$n++] = null !== $item ? upstreamLineages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UpstreamNumber'])) {
            $model->upstreamNumber = $map['UpstreamNumber'];
        }

        return $model;
    }
}
