<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketApiKeyConfig;

use AlibabaCloud\Dara\Model;

class credentials extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $mode;
    protected $_name = [
        'apiKey' => 'apiKey',
        'mode' => 'mode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['apiKey'] = $this->apiKey;
        }

        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
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
        if (isset($map['apiKey'])) {
            $model->apiKey = $map['apiKey'];
        }

        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        return $model;
    }
}
