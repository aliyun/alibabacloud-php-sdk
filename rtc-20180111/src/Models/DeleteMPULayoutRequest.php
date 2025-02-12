<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;

class DeleteMPULayoutRequest extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var int
     */
    public $layoutId;
    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'appId'    => 'AppId',
        'layoutId' => 'LayoutId',
        'ownerId'  => 'OwnerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['LayoutId'])) {
            $model->layoutId = $map['LayoutId'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
