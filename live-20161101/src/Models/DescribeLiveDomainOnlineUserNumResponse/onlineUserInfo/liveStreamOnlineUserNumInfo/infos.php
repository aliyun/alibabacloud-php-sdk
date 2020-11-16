<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainOnlineUserNumResponse\onlineUserInfo\liveStreamOnlineUserNumInfo;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainOnlineUserNumResponse\onlineUserInfo\liveStreamOnlineUserNumInfo\infos\info;
use AlibabaCloud\Tea\Model;

class infos extends Model
{
    /**
     * @var info[]
     */
    public $info;
    protected $_name = [
        'info' => 'Info',
    ];

    public function validate()
    {
        Model::validateRequired('info', $this->info, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->info) {
            $res['Info'] = [];
            if (null !== $this->info && \is_array($this->info)) {
                $n = 0;
                foreach ($this->info as $item) {
                    $res['Info'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return infos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Info'])) {
            if (!empty($map['Info'])) {
                $model->info = [];
                $n           = 0;
                foreach ($map['Info'] as $item) {
                    $model->info[$n++] = null !== $item ? info::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
