<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2ResponseBody\clusterInfo\accessInfo;

use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2ResponseBody\clusterInfo\accessInfo\ZKLinks\ZKLink;
use AlibabaCloud\Tea\Model;

class ZKLinks extends Model
{
    /**
     * @var ZKLink[]
     */
    public $ZKLink;
    protected $_name = [
        'ZKLink' => 'ZKLink',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ZKLink) {
            $res['ZKLink'] = [];
            if (null !== $this->ZKLink && \is_array($this->ZKLink)) {
                $n = 0;
                foreach ($this->ZKLink as $item) {
                    $res['ZKLink'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ZKLinks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZKLink'])) {
            if (!empty($map['ZKLink'])) {
                $model->ZKLink = [];
                $n             = 0;
                foreach ($map['ZKLink'] as $item) {
                    $model->ZKLink[$n++] = null !== $item ? ZKLink::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
