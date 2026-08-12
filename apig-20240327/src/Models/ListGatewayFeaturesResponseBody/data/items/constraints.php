<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayFeaturesResponseBody\data\items;

use AlibabaCloud\Dara\Model;

class constraints extends Model
{
    /**
     * @var int
     */
    public $bodyMaxSizeLimit;
    protected $_name = [
        'bodyMaxSizeLimit' => 'bodyMaxSizeLimit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bodyMaxSizeLimit) {
            $res['bodyMaxSizeLimit'] = $this->bodyMaxSizeLimit;
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
        if (isset($map['bodyMaxSizeLimit'])) {
            $model->bodyMaxSizeLimit = $map['bodyMaxSizeLimit'];
        }

        return $model;
    }
}
