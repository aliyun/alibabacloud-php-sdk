<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models\ConvertFlowDSLInput;

use AlibabaCloud\Dara\Model;

class options extends Model
{
    /**
     * @var bool
     */
    public $compatibilityCheck;
    protected $_name = [
        'compatibilityCheck' => 'compatibilityCheck',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compatibilityCheck) {
            $res['compatibilityCheck'] = $this->compatibilityCheck;
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
        if (isset($map['compatibilityCheck'])) {
            $model->compatibilityCheck = $map['compatibilityCheck'];
        }

        return $model;
    }
}
