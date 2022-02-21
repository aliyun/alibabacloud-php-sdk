<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainOnlineUserNumResponseBody\onlineUserInfo;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainOnlineUserNumResponseBody\onlineUserInfo\liveStreamOnlineUserNumInfo\infos;
use AlibabaCloud\Tea\Model;

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
        'infos'      => 'Infos',
        'streamName' => 'StreamName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->infos) {
            $res['Infos'] = null !== $this->infos ? $this->infos->toMap() : null;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
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
        if (isset($map['Infos'])) {
            $model->infos = infos::fromMap($map['Infos']);
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
