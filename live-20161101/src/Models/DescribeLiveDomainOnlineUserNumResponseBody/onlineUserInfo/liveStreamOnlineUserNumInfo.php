<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainOnlineUserNumResponseBody\onlineUserInfo;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainOnlineUserNumResponseBody\onlineUserInfo\liveStreamOnlineUserNumInfo\infos;
use AlibabaCloud\Tea\Model;

class liveStreamOnlineUserNumInfo extends Model
{
    /**
     * @description The statistics on the stream.
     *
     * @var infos
     */
    public $infos;

    /**
     * @description The name of the stream.
     *
     * @example rtmp://example.com/test/liveStream****_3_1
     *
     * @var string
     */
    public $streamName;
    protected $_name = [
        'infos' => 'Infos',
        'streamName' => 'StreamName',
    ];

    public function validate() {}

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
