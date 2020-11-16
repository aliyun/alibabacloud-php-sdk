<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainOnlineUserNumResponse\onlineUserInfo;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainOnlineUserNumResponse\onlineUserInfo\liveStreamOnlineUserNumInfo\infos;
use AlibabaCloud\Tea\Model;

class liveStreamOnlineUserNumInfo extends Model
{
    /**
     * @var string
     */
    public $streamName;

    /**
     * @var infos
     */
    public $infos;
    protected $_name = [
        'streamName' => 'StreamName',
        'infos'      => 'Infos',
    ];

    public function validate()
    {
        Model::validateRequired('streamName', $this->streamName, true);
        Model::validateRequired('infos', $this->infos, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->infos) {
            $res['Infos'] = null !== $this->infos ? $this->infos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveStreamOnlineUserNumInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['Infos'])) {
            $model->infos = infos::fromMap($map['Infos']);
        }

        return $model;
    }
}
