<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeStrategyRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $strategyIds;

    /**
     * @var string
     */
    public $customType;
    protected $_name = [
        'sourceIp'    => 'SourceIp',
        'lang'        => 'Lang',
        'strategyIds' => 'StrategyIds',
        'customType'  => 'CustomType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->strategyIds) {
            $res['StrategyIds'] = $this->strategyIds;
        }
        if (null !== $this->customType) {
            $res['CustomType'] = $this->customType;
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
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['StrategyIds'])) {
            $model->strategyIds = $map['StrategyIds'];
        }
        if (isset($map['CustomType'])) {
            $model->customType = $map['CustomType'];
        }

        return $model;
    }
}
