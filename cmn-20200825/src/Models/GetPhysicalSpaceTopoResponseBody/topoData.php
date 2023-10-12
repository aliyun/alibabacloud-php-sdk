<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\GetPhysicalSpaceTopoResponseBody;

use AlibabaCloud\SDK\Cmn\V20200825\Models\GetPhysicalSpaceTopoResponseBody\topoData\devices;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetPhysicalSpaceTopoResponseBody\topoData\links;
use AlibabaCloud\Tea\Model;

class topoData extends Model
{
    /**
     * @var devices[]
     */
    public $devices;

    /**
     * @var links[]
     */
    public $links;

    /**
     * @example 2023-02-01 22:24:16
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'devices'    => 'Devices',
        'links'      => 'Links',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->devices) {
            $res['Devices'] = [];
            if (null !== $this->devices && \is_array($this->devices)) {
                $n = 0;
                foreach ($this->devices as $item) {
                    $res['Devices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->links) {
            $res['Links'] = [];
            if (null !== $this->links && \is_array($this->links)) {
                $n = 0;
                foreach ($this->links as $item) {
                    $res['Links'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return topoData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Devices'])) {
            if (!empty($map['Devices'])) {
                $model->devices = [];
                $n              = 0;
                foreach ($map['Devices'] as $item) {
                    $model->devices[$n++] = null !== $item ? devices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Links'])) {
            if (!empty($map['Links'])) {
                $model->links = [];
                $n            = 0;
                foreach ($map['Links'] as $item) {
                    $model->links[$n++] = null !== $item ? links::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
