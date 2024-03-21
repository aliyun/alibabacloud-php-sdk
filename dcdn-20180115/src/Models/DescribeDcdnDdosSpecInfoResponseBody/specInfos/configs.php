<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDdosSpecInfoResponseBody\specInfos;

use AlibabaCloud\Tea\Model;

class configs extends Model
{
    /**
     * @description The configuration code of the version rule. Valid values:
     *
     *   **total_defense_num**: the total number of mitigation sessions of the version.
     *   **consume_defense_num**: the number of used mitigation sessions of the version.
     *   **max_domain_num**: the limit on the number of added domain names.
     *   **emain_domain_num**: the number of added domain names.
     *   **defence_package_num**: the total number of purchased additional mitigation sessions.
     *   **consume_defence_package_num**: the number of used additional mitigation sessions.
     *
     * @example total_defense_num
     *
     * @var string
     */
    public $config;

    /**
     * @description The configuration expression of the version rule.
     *
     * @example equal
     *
     * @var string
     */
    public $expr;

    /**
     * @description The value of the configuration expression of the version rule.
     *
     * @example 1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'config' => 'Config',
        'expr'   => 'Expr',
        'value'  => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->expr) {
            $res['Expr'] = $this->expr;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Expr'])) {
            $model->expr = $map['Expr'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
