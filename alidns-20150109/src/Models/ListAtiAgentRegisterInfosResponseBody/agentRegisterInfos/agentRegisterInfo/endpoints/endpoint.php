<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\ListAtiAgentRegisterInfosResponseBody\agentRegisterInfos\agentRegisterInfo\endpoints;

use AlibabaCloud\Dara\Model;

class endpoint extends Model
{
    /**
     * @var string
     */
    public $protocol;
    protected $_name = [
        'protocol' => 'Protocol',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
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
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}
