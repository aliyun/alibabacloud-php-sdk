<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListSnapshotsResponseBody\mediaSnapshot\snapshots;

use AlibabaCloud\Tea\Model;

class snapshot extends Model
{
    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'index' => 'Index',
        'url'   => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snapshot
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
