<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\ListExchangeUpstreamBindingsResponseBody\data\voList;

use AlibabaCloud\Dara\Model;

class bindingVO extends Model
{
    /**
     * @var string
     */
    public $argument;

    /**
     * @var int
     */
    public $bindType;

    /**
     * @var string
     */
    public $bindingKey;

    /**
     * @var string
     */
    public $dstName;

    /**
     * @var string
     */
    public $srcName;
    protected $_name = [
        'argument' => 'Argument',
        'bindType' => 'BindType',
        'bindingKey' => 'BindingKey',
        'dstName' => 'DstName',
        'srcName' => 'SrcName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->argument) {
            $res['Argument'] = $this->argument;
        }

        if (null !== $this->bindType) {
            $res['BindType'] = $this->bindType;
        }

        if (null !== $this->bindingKey) {
            $res['BindingKey'] = $this->bindingKey;
        }

        if (null !== $this->dstName) {
            $res['DstName'] = $this->dstName;
        }

        if (null !== $this->srcName) {
            $res['SrcName'] = $this->srcName;
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
        if (isset($map['Argument'])) {
            $model->argument = $map['Argument'];
        }

        if (isset($map['BindType'])) {
            $model->bindType = $map['BindType'];
        }

        if (isset($map['BindingKey'])) {
            $model->bindingKey = $map['BindingKey'];
        }

        if (isset($map['DstName'])) {
            $model->dstName = $map['DstName'];
        }

        if (isset($map['SrcName'])) {
            $model->srcName = $map['SrcName'];
        }

        return $model;
    }
}
