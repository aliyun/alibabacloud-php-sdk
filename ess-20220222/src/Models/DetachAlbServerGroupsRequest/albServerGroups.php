<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DetachAlbServerGroupsRequest;

use AlibabaCloud\Dara\Model;

class albServerGroups extends Model
{
    /**
     * @var string
     */
    public $albServerGroupId;

    /**
     * @var int
     */
    public $port;
    protected $_name = [
        'albServerGroupId' => 'AlbServerGroupId',
        'port' => 'Port',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->albServerGroupId) {
            $res['AlbServerGroupId'] = $this->albServerGroupId;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
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
        if (isset($map['AlbServerGroupId'])) {
            $model->albServerGroupId = $map['AlbServerGroupId'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
