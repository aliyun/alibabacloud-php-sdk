<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHybridMonitorTaskRequest\SLSProcessConfig;

use AlibabaCloud\Dara\Model;

class statistics extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $function;

    /**
     * @var string
     */
    public $parameter1;

    /**
     * @var string
     */
    public $parameter2;

    /**
     * @var string
     */
    public $SLSKeyName;
    protected $_name = [
        'alias' => 'Alias',
        'function' => 'Function',
        'parameter1' => 'Parameter1',
        'parameter2' => 'Parameter2',
        'SLSKeyName' => 'SLSKeyName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        if (null !== $this->function) {
            $res['Function'] = $this->function;
        }

        if (null !== $this->parameter1) {
            $res['Parameter1'] = $this->parameter1;
        }

        if (null !== $this->parameter2) {
            $res['Parameter2'] = $this->parameter2;
        }

        if (null !== $this->SLSKeyName) {
            $res['SLSKeyName'] = $this->SLSKeyName;
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
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        if (isset($map['Function'])) {
            $model->function = $map['Function'];
        }

        if (isset($map['Parameter1'])) {
            $model->parameter1 = $map['Parameter1'];
        }

        if (isset($map['Parameter2'])) {
            $model->parameter2 = $map['Parameter2'];
        }

        if (isset($map['SLSKeyName'])) {
            $model->SLSKeyName = $map['SLSKeyName'];
        }

        return $model;
    }
}
