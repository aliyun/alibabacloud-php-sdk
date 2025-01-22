<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class CreateMediaConnectFlowRequest extends Model
{
    /**
     * @var string
     */
    public $flowName;
    /**
     * @var string
     */
    public $flowRegion;
    protected $_name = [
        'flowName'   => 'FlowName',
        'flowRegion' => 'FlowRegion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }

        if (null !== $this->flowRegion) {
            $res['FlowRegion'] = $this->flowRegion;
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
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }

        if (isset($map['FlowRegion'])) {
            $model->flowRegion = $map['FlowRegion'];
        }

        return $model;
    }
}
