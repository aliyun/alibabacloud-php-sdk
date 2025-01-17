<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchPublicMediaInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchPublicMediaInfoResponseBody\publicMediaInfos\mediaInfo;

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
        if (null !== $this->mediaInfo) {
            $this->mediaInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorized) {
            $res['Authorized'] = $this->authorized;
        }

        if (null !== $this->favorite) {
            $res['Favorite'] = $this->favorite;
        }

        if (null !== $this->mediaInfo) {
            $res['MediaInfo'] = null !== $this->mediaInfo ? $this->mediaInfo->toArray($noStream) : $this->mediaInfo;
        }

        if (null !== $this->remainingAuthTime) {
            $res['RemainingAuthTime'] = $this->remainingAuthTime;
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
