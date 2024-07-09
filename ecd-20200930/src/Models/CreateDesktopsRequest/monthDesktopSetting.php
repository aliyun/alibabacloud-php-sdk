<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsRequest;

use AlibabaCloud\Tea\Model;

class monthDesktopSetting extends Model
{
    /**
     * @description > This parameter is not publicly available.
     *
     * @example null
     *
     * @var int
     */
    public $buyerId;

    /**
     * @description > This parameter is not publicly available.
     *
     * @example null
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description > This parameter is not publicly available.
     *
     * @example null
     *
     * @var int
     */
    public $useDuration;
    protected $_name = [
        'buyerId'     => 'BuyerId',
        'desktopId'   => 'DesktopId',
        'useDuration' => 'UseDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buyerId) {
            $res['BuyerId'] = $this->buyerId;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->useDuration) {
            $res['UseDuration'] = $this->useDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monthDesktopSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuyerId'])) {
            $model->buyerId = $map['BuyerId'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['UseDuration'])) {
            $model->useDuration = $map['UseDuration'];
        }

        return $model;
    }
}
