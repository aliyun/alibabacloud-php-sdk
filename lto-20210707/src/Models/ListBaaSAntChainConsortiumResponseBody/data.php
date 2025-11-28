<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models\ListBaaSAntChainConsortiumResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $baaSAntChainConsortiumId;

    /**
     * @var string
     */
    public $baaSAntChainConsortiumName;
    protected $_name = [
        'baaSAntChainConsortiumId' => 'BaaSAntChainConsortiumId',
        'baaSAntChainConsortiumName' => 'BaaSAntChainConsortiumName',
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

        if (null !== $this->baaSAntChainConsortiumName) {
            $res['BaaSAntChainConsortiumName'] = $this->baaSAntChainConsortiumName;
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

        if (isset($map['BaaSAntChainConsortiumName'])) {
            $model->baaSAntChainConsortiumName = $map['BaaSAntChainConsortiumName'];
        }

        return $model;
    }
}
