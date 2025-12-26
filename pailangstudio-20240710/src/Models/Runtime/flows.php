<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models\Runtime;

use AlibabaCloud\Dara\Model;

class flows extends Model
{
    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $flowName;
    protected $_name = [
        'flowId' => 'FlowId',
        'flowName' => 'FlowName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
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
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }

        return $model;
    }
}
