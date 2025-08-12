<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainOnlineUserNumResponseBody\onlineUserInfo\liveStreamOnlineUserNumInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainOnlineUserNumResponseBody\onlineUserInfo\liveStreamOnlineUserNumInfo\infos\info;

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
        if (\is_array($this->info)) {
            Model::validateArray($this->info);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->info) {
            if (\is_array($this->info)) {
                $res['Info'] = [];
                $n1 = 0;
                foreach ($this->info as $item1) {
                    $res['Info'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Info'])) {
            if (!empty($map['Info'])) {
                $model->info = [];
                $n1 = 0;
                foreach ($map['Info'] as $item1) {
                    $model->info[$n1] = info::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
