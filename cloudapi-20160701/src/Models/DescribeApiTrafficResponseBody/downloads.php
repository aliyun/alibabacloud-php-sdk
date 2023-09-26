<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models\DescribeApiTrafficResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160701\Models\DescribeApiTrafficResponseBody\downloads\download;
use AlibabaCloud\Tea\Model;

class downloads extends Model
{
    /**
     * @var download[]
     */
    public $download;
    protected $_name = [
        'download' => 'Download',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->download) {
            $res['Download'] = [];
            if (null !== $this->download && \is_array($this->download)) {
                $n = 0;
                foreach ($this->download as $item) {
                    $res['Download'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return downloads
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Download'])) {
            if (!empty($map['Download'])) {
                $model->download = [];
                $n               = 0;
                foreach ($map['Download'] as $item) {
                    $model->download[$n++] = null !== $item ? download::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
