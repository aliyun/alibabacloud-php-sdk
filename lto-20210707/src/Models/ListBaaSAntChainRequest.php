<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models;

use AlibabaCloud\Dara\Model;

class ListBaaSAntChainRequest extends Model
{
    /**
     * @var string
     */
    public $baaSAntChainConsortiumId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'baaSAntChainConsortiumId' => 'BaaSAntChainConsortiumId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baaSAntChainConsortiumId) {
            $res['BaaSAntChainConsortiumId'] = $this->baaSAntChainConsortiumId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['BaaSAntChainConsortiumId'])) {
            $model->baaSAntChainConsortiumId = $map['BaaSAntChainConsortiumId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
