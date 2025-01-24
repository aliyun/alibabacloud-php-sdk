<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsRequest;

use AlibabaCloud\Dara\Model;

class monthDesktopSetting extends Model
{
    /**
     * @var int
     */
    public $buyerId;
    /**
     * @var string
     */
    public $desktopId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
