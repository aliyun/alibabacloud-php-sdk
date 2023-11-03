<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListAddonReleasesResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListAddonReleasesResponseBody\data\releases;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Release list.
     *
     * @var releases[]
     */
    public $releases;

    /**
     * @description The total number of entries returned.
     *
     * @example 12
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'releases' => 'Releases',
        'total'    => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->releases) {
            $res['Releases'] = [];
            if (null !== $this->releases && \is_array($this->releases)) {
                $n = 0;
                foreach ($this->releases as $item) {
                    $res['Releases'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Releases'])) {
            if (!empty($map['Releases'])) {
                $model->releases = [];
                $n               = 0;
                foreach ($map['Releases'] as $item) {
                    $model->releases[$n++] = null !== $item ? releases::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
