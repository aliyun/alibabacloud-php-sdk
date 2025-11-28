<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models\ListBaaSFabricConsortiumResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $baaSFabricConsortiumId;

    /**
     * @var string
     */
    public $baaSFabricConsortiumName;
    protected $_name = [
        'baaSFabricConsortiumId' => 'BaaSFabricConsortiumId',
        'baaSFabricConsortiumName' => 'BaaSFabricConsortiumName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baaSFabricConsortiumId) {
            $res['BaaSFabricConsortiumId'] = $this->baaSFabricConsortiumId;
        }

        if (null !== $this->baaSFabricConsortiumName) {
            $res['BaaSFabricConsortiumName'] = $this->baaSFabricConsortiumName;
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
        if (isset($map['BaaSFabricConsortiumId'])) {
            $model->baaSFabricConsortiumId = $map['BaaSFabricConsortiumId'];
        }

        if (isset($map['BaaSFabricConsortiumName'])) {
            $model->baaSFabricConsortiumName = $map['BaaSFabricConsortiumName'];
        }

        return $model;
    }
}
