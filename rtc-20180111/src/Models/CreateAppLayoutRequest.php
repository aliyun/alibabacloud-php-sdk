<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAppLayoutRequest\layout;

class CreateAppLayoutRequest extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var layout
     */
    public $layout;
    protected $_name = [
        'appId'       => 'AppId',
        'clientToken' => 'ClientToken',
        'layout'      => 'Layout',
    ];

    public function validate()
    {
        if (null !== $this->layout) {
            $this->layout->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->layout) {
            $res['Layout'] = null !== $this->layout ? $this->layout->toArray($noStream) : $this->layout;
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

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Layout'])) {
            $model->layout = layout::fromMap($map['Layout']);
        }

        return $model;
    }
}
