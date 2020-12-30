<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterHostResponseBody\hostList\host;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterHostResponseBody\hostList\host\diskList\disk;
use AlibabaCloud\Tea\Model;

class diskList extends Model
{
    /**
     * @var disk[]
     */
    public $disk;
    protected $_name = [
        'disk' => 'Disk',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disk) {
            $res['Disk'] = [];
            if (null !== $this->disk && \is_array($this->disk)) {
                $n = 0;
                foreach ($this->disk as $item) {
                    $res['Disk'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Disk'])) {
            if (!empty($map['Disk'])) {
                $model->disk = [];
                $n           = 0;
                foreach ($map['Disk'] as $item) {
                    $model->disk[$n++] = null !== $item ? disk::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
