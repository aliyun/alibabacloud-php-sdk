<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeStrategyRequest extends Model
{
    /**
     * @example custom
     *
     * @var string
     */
    public $customType;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example 1.2.X.X
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @example 8164248
     *
     * @var string
     */
    public $strategyIds;
    protected $_name = [
        'customType'  => 'CustomType',
        'lang'        => 'Lang',
        'sourceIp'    => 'SourceIp',
        'strategyIds' => 'StrategyIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customType) {
            $res['CustomType'] = $this->customType;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->strategyIds) {
            $res['StrategyIds'] = $this->strategyIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStrategyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomType'])) {
            $model->customType = $map['CustomType'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['StrategyIds'])) {
            $model->strategyIds = $map['StrategyIds'];
        }

        return $model;
    }
}
