<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMcpResponseBody\data;

use AlibabaCloud\Dara\Model;

class marketSource extends Model
{
    /**
     * @var string
     */
    public $marketItemId;
    protected $_name = [
        'marketItemId' => 'marketItemId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->marketItemId) {
            $res['marketItemId'] = $this->marketItemId;
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
        if (isset($map['marketItemId'])) {
            $model->marketItemId = $map['marketItemId'];
        }

        return $model;
    }
}
