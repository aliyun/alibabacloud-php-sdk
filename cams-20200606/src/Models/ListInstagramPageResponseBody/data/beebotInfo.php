<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListInstagramPageResponseBody\data;

use AlibabaCloud\Dara\Model;

class beebotInfo extends Model
{
    /**
     * @var string
     */
    public $beebotInstanceId;

    /**
     * @var string
     */
    public $beebotNamespaceId;
    protected $_name = [
        'beebotInstanceId' => 'BeebotInstanceId',
        'beebotNamespaceId' => 'BeebotNamespaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beebotInstanceId) {
            $res['BeebotInstanceId'] = $this->beebotInstanceId;
        }

        if (null !== $this->beebotNamespaceId) {
            $res['BeebotNamespaceId'] = $this->beebotNamespaceId;
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
        if (isset($map['BeebotInstanceId'])) {
            $model->beebotInstanceId = $map['BeebotInstanceId'];
        }

        if (isset($map['BeebotNamespaceId'])) {
            $model->beebotNamespaceId = $map['BeebotNamespaceId'];
        }

        return $model;
    }
}
