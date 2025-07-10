<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models\SubscribeRequest;

use AlibabaCloud\Dara\Model;

class kafkaAttributes extends Model
{
    /**
     * @var string
     */
    public $businessMode;
    protected $_name = [
        'businessMode' => 'BusinessMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessMode) {
            $res['BusinessMode'] = $this->businessMode;
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
        if (isset($map['BusinessMode'])) {
            $model->businessMode = $map['BusinessMode'];
        }

        return $model;
    }
}
