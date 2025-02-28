<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetSceneResponseBody;

use AlibabaCloud\Dara\Model;

class flows extends Model
{
    /**
     * @var string
     */
    public $flowCode;
    /**
     * @var string
     */
    public $flowName;
    protected $_name = [
        'flowCode' => 'FlowCode',
        'flowName' => 'FlowName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flowCode) {
            $res['FlowCode'] = $this->flowCode;
        }

        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
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
        if (isset($map['FlowCode'])) {
            $model->flowCode = $map['FlowCode'];
        }

        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }

        return $model;
    }
}
