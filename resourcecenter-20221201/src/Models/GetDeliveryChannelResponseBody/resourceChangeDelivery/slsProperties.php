<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetDeliveryChannelResponseBody\resourceChangeDelivery;

use AlibabaCloud\Dara\Model;

class slsProperties extends Model
{
    /**
     * @var string
     */
    public $oversizedDataOssTargetArn;
    protected $_name = [
        'oversizedDataOssTargetArn' => 'OversizedDataOssTargetArn',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->oversizedDataOssTargetArn) {
            $res['OversizedDataOssTargetArn'] = $this->oversizedDataOssTargetArn;
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
        if (isset($map['OversizedDataOssTargetArn'])) {
            $model->oversizedDataOssTargetArn = $map['OversizedDataOssTargetArn'];
        }

        return $model;
    }
}
