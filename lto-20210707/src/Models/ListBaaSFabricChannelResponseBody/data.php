<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models\ListBaaSFabricChannelResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $baaSFabricChannelId;

    /**
     * @var string
     */
    public $baaSFabricChannelName;
    protected $_name = [
        'baaSFabricChannelId' => 'BaaSFabricChannelId',
        'baaSFabricChannelName' => 'BaaSFabricChannelName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baaSFabricChannelId) {
            $res['BaaSFabricChannelId'] = $this->baaSFabricChannelId;
        }

        if (null !== $this->baaSFabricChannelName) {
            $res['BaaSFabricChannelName'] = $this->baaSFabricChannelName;
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
        if (isset($map['BaaSFabricChannelId'])) {
            $model->baaSFabricChannelId = $map['BaaSFabricChannelId'];
        }

        if (isset($map['BaaSFabricChannelName'])) {
            $model->baaSFabricChannelName = $map['BaaSFabricChannelName'];
        }

        return $model;
    }
}
