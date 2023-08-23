<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudCallCenter\V20200701\Models;

use AlibabaCloud\Tea\Model;

class CreateDemoInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $outboundCallWhitelist;
    protected $_name = [
        'outboundCallWhitelist' => 'OutboundCallWhitelist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outboundCallWhitelist) {
            $res['OutboundCallWhitelist'] = $this->outboundCallWhitelist;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDemoInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutboundCallWhitelist'])) {
            $model->outboundCallWhitelist = $map['OutboundCallWhitelist'];
        }

        return $model;
    }
}
