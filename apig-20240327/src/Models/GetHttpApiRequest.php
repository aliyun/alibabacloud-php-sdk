<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class GetHttpApiRequest extends Model
{
    /**
     * @var bool
     */
    public $expandPolicyConfigs;
    protected $_name = [
        'expandPolicyConfigs' => 'expandPolicyConfigs',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expandPolicyConfigs) {
            $res['expandPolicyConfigs'] = $this->expandPolicyConfigs;
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
        if (isset($map['expandPolicyConfigs'])) {
            $model->expandPolicyConfigs = $map['expandPolicyConfigs'];
        }

        return $model;
    }
}
