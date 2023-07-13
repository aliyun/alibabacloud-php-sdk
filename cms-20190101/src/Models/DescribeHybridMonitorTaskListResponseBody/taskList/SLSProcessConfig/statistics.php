<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorTaskListResponseBody\taskList\SLSProcessConfig;

use AlibabaCloud\Tea\Model;

class statistics extends Model
{
    /**
     * @example level_count
     *
     * @var string
     */
    public $alias;

    /**
     * @example count
     *
     * @var string
     */
    public $function;

    /**
     * @example 200
     *
     * @var string
     */
    public $parameter1;

    /**
     * @example 299
     *
     * @var string
     */
    public $parameter2;

    /**
     * @example name
     *
     * @var string
     */
    public $SLSKeyName;
    protected $_name = [
        'alias'      => 'Alias',
        'function'   => 'Function',
        'parameter1' => 'Parameter1',
        'parameter2' => 'Parameter2',
        'SLSKeyName' => 'SLSKeyName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return statistics
     */
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
