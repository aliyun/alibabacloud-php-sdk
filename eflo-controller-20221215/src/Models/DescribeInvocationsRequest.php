<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;

class DescribeInvocationsRequest extends Model
{
    /**
     * @var string
     */
    public $contentEncoding;
    /**
     * @var bool
     */
    public $includeOutput;
    /**
     * @var string
     */
    public $invokeId;
    /**
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'contentEncoding' => 'ContentEncoding',
        'includeOutput'   => 'IncludeOutput',
        'invokeId'        => 'InvokeId',
        'nodeId'          => 'NodeId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentEncoding) {
            $res['ContentEncoding'] = $this->contentEncoding;
        }

        if (null !== $this->includeOutput) {
            $res['IncludeOutput'] = $this->includeOutput;
        }

        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
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
        if (isset($map['ContentEncoding'])) {
            $model->contentEncoding = $map['ContentEncoding'];
        }

        if (isset($map['IncludeOutput'])) {
            $model->includeOutput = $map['IncludeOutput'];
        }

        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
