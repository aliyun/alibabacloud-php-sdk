<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeWhiteListStrategyListRequest extends Model
{
    /**
     * @var string
     */
    public $lang;
    /**
     * @var string
     */
    public $sourceIp;
    /**
     * @var string
     */
    public $strategyIds;
    protected $_name = [
        'lang'        => 'Lang',
        'sourceIp'    => 'SourceIp',
        'strategyIds' => 'StrategyIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
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
