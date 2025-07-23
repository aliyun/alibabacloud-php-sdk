<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models\SubscribeRequest;

use AlibabaCloud\Tea\Model;

class kafkaAttributes extends Model
{
    /**
     * @var string
     */
    public $businessMode;
    protected $_name = [
        'businessMode' => 'BusinessMode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessMode) {
            $res['BusinessMode'] = $this->businessMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return kafkaAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessMode'])) {
            $model->businessMode = $map['BusinessMode'];
        }

        return $model;
    }
}
