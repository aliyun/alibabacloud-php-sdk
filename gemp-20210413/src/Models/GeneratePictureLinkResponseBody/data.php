<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GeneratePictureLinkResponseBody;

use AlibabaCloud\SDK\GEMP\V20210413\Models\GeneratePictureLinkResponseBody\data\links;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description array
     *
     * @var links[]
     */
    public $links;
    protected $_name = [
        'links' => 'links',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->links) {
            $res['links'] = [];
            if (null !== $this->links && \is_array($this->links)) {
                $n = 0;
                foreach ($this->links as $item) {
                    $res['links'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['links'])) {
            if (!empty($map['links'])) {
                $model->links = [];
                $n            = 0;
                foreach ($map['links'] as $item) {
                    $model->links[$n++] = null !== $item ? links::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
