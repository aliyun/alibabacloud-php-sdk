<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models\ListBaaSAntChainResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $baaSAntChainChainId;

    /**
     * @var string
     */
    public $baaSAntChainChainName;
    protected $_name = [
        'baaSAntChainChainId' => 'BaaSAntChainChainId',
        'baaSAntChainChainName' => 'BaaSAntChainChainName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baaSAntChainChainId) {
            $res['BaaSAntChainChainId'] = $this->baaSAntChainChainId;
        }

        if (null !== $this->baaSAntChainChainName) {
            $res['BaaSAntChainChainName'] = $this->baaSAntChainChainName;
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
        if (isset($map['BaaSAntChainChainId'])) {
            $model->baaSAntChainChainId = $map['BaaSAntChainChainId'];
        }

        if (isset($map['BaaSAntChainChainName'])) {
            $model->baaSAntChainChainName = $map['BaaSAntChainChainName'];
        }

        return $model;
    }
}
