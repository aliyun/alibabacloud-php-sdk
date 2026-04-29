<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\HandleObjectScanEventRequest;

use AlibabaCloud\Dara\Model;

class ruleConditionList extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $operate;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'key' => 'Key',
        'operate' => 'Operate',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->operate) {
            $res['Operate'] = $this->operate;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Operate'])) {
            $model->operate = $map['Operate'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
