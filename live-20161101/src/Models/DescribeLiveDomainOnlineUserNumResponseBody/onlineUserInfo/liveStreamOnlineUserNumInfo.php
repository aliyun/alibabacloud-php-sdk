<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainOnlineUserNumResponseBody\onlineUserInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainOnlineUserNumResponseBody\onlineUserInfo\liveStreamOnlineUserNumInfo\infos;

class liveStreamOnlineUserNumInfo extends Model
{
    /**
     * @var infos
     */
    public $infos;

    /**
     * @var string
     */
    public $streamName;
    protected $_name = [
        'infos' => 'Infos',
        'streamName' => 'StreamName',
    ];

    public function validate()
    {
        if (null !== $this->infos) {
            $this->infos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->infos) {
            $res['Infos'] = null !== $this->infos ? $this->infos->toArray($noStream) : $this->infos;
        }

        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
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
        if (isset($map['Infos'])) {
            $model->infos = infos::fromMap($map['Infos']);
        }

        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
