<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class DeleteMediaConnectFlowOutputRequest extends Model
{
    /**
     * @var string
     */
    public $flowId;
    /**
     * @var string
     */
    public $outputName;
    protected $_name = [
        'flowId'     => 'FlowId',
        'outputName' => 'OutputName',
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

        if (null !== $this->outputName) {
            $res['OutputName'] = $this->outputName;
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

        if (isset($map['OutputName'])) {
            $model->outputName = $map['OutputName'];
        }

        return $model;
    }
}
