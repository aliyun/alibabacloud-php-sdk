<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models;

use AlibabaCloud\Dara\Model;

class CreatePlayingListShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $deviceInfoShrink;

    /**
     * @var string
     */
    public $openCreatePlayingListRequestShrink;
    protected $_name = [
        'deviceInfoShrink' => 'DeviceInfo',
        'openCreatePlayingListRequestShrink' => 'OpenCreatePlayingListRequest',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceInfoShrink) {
            $res['DeviceInfo'] = $this->deviceInfoShrink;
        }

        if (null !== $this->openCreatePlayingListRequestShrink) {
            $res['OpenCreatePlayingListRequest'] = $this->openCreatePlayingListRequestShrink;
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
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfoShrink = $map['DeviceInfo'];
        }

        if (isset($map['OpenCreatePlayingListRequest'])) {
            $model->openCreatePlayingListRequestShrink = $map['OpenCreatePlayingListRequest'];
        }

        return $model;
    }
}
