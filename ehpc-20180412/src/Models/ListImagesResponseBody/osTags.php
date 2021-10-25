<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListImagesResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListImagesResponseBody\osTags\osInfo;
use AlibabaCloud\Tea\Model;

class osTags extends Model
{
    /**
     * @var osInfo[]
     */
    public $osInfo;
    protected $_name = [
        'osInfo' => 'OsInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->osInfo) {
            $res['OsInfo'] = [];
            if (null !== $this->osInfo && \is_array($this->osInfo)) {
                $n = 0;
                foreach ($this->osInfo as $item) {
                    $res['OsInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return osTags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OsInfo'])) {
            if (!empty($map['OsInfo'])) {
                $model->osInfo = [];
                $n             = 0;
                foreach ($map['OsInfo'] as $item) {
                    $model->osInfo[$n++] = null !== $item ? osInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
