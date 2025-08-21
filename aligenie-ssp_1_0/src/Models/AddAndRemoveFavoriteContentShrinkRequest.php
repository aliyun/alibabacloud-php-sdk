<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Dara\Model;

class AddAndRemoveFavoriteContentShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $deviceInfoShrink;

    /**
     * @var string
     */
    public $openAddAndRemoveFavoriteContentRequestShrink;

    /**
     * @var string
     */
    public $userInfoShrink;
    protected $_name = [
        'deviceInfoShrink' => 'DeviceInfo',
        'openAddAndRemoveFavoriteContentRequestShrink' => 'OpenAddAndRemoveFavoriteContentRequest',
        'userInfoShrink' => 'UserInfo',
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

        if (null !== $this->openAddAndRemoveFavoriteContentRequestShrink) {
            $res['OpenAddAndRemoveFavoriteContentRequest'] = $this->openAddAndRemoveFavoriteContentRequestShrink;
        }

        if (null !== $this->userInfoShrink) {
            $res['UserInfo'] = $this->userInfoShrink;
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

        if (isset($map['OpenAddAndRemoveFavoriteContentRequest'])) {
            $model->openAddAndRemoveFavoriteContentRequestShrink = $map['OpenAddAndRemoveFavoriteContentRequest'];
        }

        if (isset($map['UserInfo'])) {
            $model->userInfoShrink = $map['UserInfo'];
        }

        return $model;
    }
}
