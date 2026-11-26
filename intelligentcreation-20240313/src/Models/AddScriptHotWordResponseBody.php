<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class AddScriptHotWordResponseBody extends Model
{
    /**
     * @var string
     */
    public $hotWordId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'hotWordId' => 'hotWordId',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotWordId) {
            $res['hotWordId'] = $this->hotWordId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['hotWordId'])) {
            $model->hotWordId = $map['hotWordId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
