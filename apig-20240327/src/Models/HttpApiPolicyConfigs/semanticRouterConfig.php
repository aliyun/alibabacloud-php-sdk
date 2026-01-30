<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPolicyConfigs;

use AlibabaCloud\Dara\Model;

class semanticRouterConfig extends Model
{
    /**
     * @var int
     */
    public $timeoutMillisecond;
    protected $_name = [
        'timeoutMillisecond' => 'timeoutMillisecond',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->timeoutMillisecond) {
            $res['timeoutMillisecond'] = $this->timeoutMillisecond;
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
        if (isset($map['timeoutMillisecond'])) {
            $model->timeoutMillisecond = $map['timeoutMillisecond'];
        }

        return $model;
    }
}
