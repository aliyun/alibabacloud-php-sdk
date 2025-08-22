<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateAlertRuleResponseBody\alertRule\filters;

use AlibabaCloud\Dara\Model;

class customSLSFilters extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $opt;

    /**
     * @var bool
     */
    public $show;

    /**
     * @var string
     */
    public $t;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'key' => 'Key',
        'opt' => 'Opt',
        'show' => 'Show',
        't' => 'T',
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
