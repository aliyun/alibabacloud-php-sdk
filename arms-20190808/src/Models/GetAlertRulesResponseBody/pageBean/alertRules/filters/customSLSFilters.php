<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody\pageBean\alertRules\filters;

use AlibabaCloud\Tea\Model;

class customSLSFilters extends Model
{
    /**
     * @example username
     *
     * @var string
     */
    public $key;

    /**
     * @example =
     *
     * @var string
     */
    public $opt;

    /**
     * @example false
     *
     * @var bool
     */
    public $show;

    /**
     * @example null
     *
     * @var string
     */
    public $t;

    /**
     * @example test
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'opt'   => 'Opt',
        'show'  => 'Show',
        't'     => 'T',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->opt) {
            $res['Opt'] = $this->opt;
        }
        if (null !== $this->show) {
            $res['Show'] = $this->show;
        }
        if (null !== $this->t) {
            $res['T'] = $this->t;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customSLSFilters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Opt'])) {
            $model->opt = $map['Opt'];
        }
        if (isset($map['Show'])) {
            $model->show = $map['Show'];
        }
        if (isset($map['T'])) {
            $model->t = $map['T'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
