<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\CreateWaitingOrderRequest;

use AlibabaCloud\Tea\Model;

class hibernationOptions extends Model
{
    /**
     * @var bool
     */
    public $configured;
    protected $_name = [
        'configured' => 'Configured',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configured) {
            $res['Configured'] = $this->configured;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hibernationOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Configured'])) {
            $model->configured = $map['Configured'];
        }

        return $model;
    }
}
