<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody\pageBean\alertRules\filters;

use AlibabaCloud\Tea\Model;

class customSLSFilters extends Model
{
    /**
     * @description The key of the filter condition.
     *
     * @example username
     *
     * @var string
     */
    public $key;

    /**
     * @description The logical operator of the filter condition. Valid values:
     *
     *   \\=: equal to
     *   not: not equal to
     *
     * @example =
     *
     * @var string
     */
    public $opt;

    /**
     * @description Indicates whether this filter condition was displayed on the frontend.
     *
     * @example false
     *
     * @var bool
     */
    public $show;

    /**
     * @description Indicates the log type of Browser Monitoring. This field was not included in other filter conditions.
     *
     * @example null
     *
     * @var string
     */
    public $t;

    /**
     * @description The value of the filter condition.
     *
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
