<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchPublicMediaInfoResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\SearchPublicMediaInfoResponseBody\publicMediaInfos\mediaInfo;
use AlibabaCloud\Tea\Model;

class publicMediaInfos extends Model
{
    /**
     * @var bool
     */
    public $authorized;

    /**
     * @var bool
     */
    public $favorite;

    /**
     * @var mediaInfo
     */
    public $mediaInfo;

    /**
     * @var string
     */
    public $remainingAuthTime;
    protected $_name = [
        'authorized'        => 'Authorized',
        'favorite'          => 'Favorite',
        'mediaInfo'         => 'MediaInfo',
        'remainingAuthTime' => 'RemainingAuthTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorized) {
            $res['Authorized'] = $this->authorized;
        }
        if (null !== $this->favorite) {
            $res['Favorite'] = $this->favorite;
        }
        if (null !== $this->mediaInfo) {
            $res['MediaInfo'] = null !== $this->mediaInfo ? $this->mediaInfo->toMap() : null;
        }
        if (null !== $this->remainingAuthTime) {
            $res['RemainingAuthTime'] = $this->remainingAuthTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publicMediaInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Authorized'])) {
            $model->authorized = $map['Authorized'];
        }
        if (isset($map['Favorite'])) {
            $model->favorite = $map['Favorite'];
        }
        if (isset($map['MediaInfo'])) {
            $model->mediaInfo = mediaInfo::fromMap($map['MediaInfo']);
        }
        if (isset($map['RemainingAuthTime'])) {
            $model->remainingAuthTime = $map['RemainingAuthTime'];
        }

        return $model;
    }
}
