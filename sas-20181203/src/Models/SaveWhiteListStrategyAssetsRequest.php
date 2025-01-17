<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class SaveWhiteListStrategyAssetsRequest extends Model
{
    /**
     * @var string
     */
    public $lang;
    /**
     * @var string
     */
    public $operations;
    /**
     * @var int
     */
    public $relationType;
    /**
     * @var string
     */
    public $sourceIp;
    /**
     * @var int
     */
    public $strategyId;
    protected $_name = [
        'lang'         => 'Lang',
        'operations'   => 'Operations',
        'relationType' => 'RelationType',
        'sourceIp'     => 'SourceIp',
        'strategyId'   => 'StrategyId',
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

        if (null !== $this->operations) {
            $res['Operations'] = $this->operations;
        }

        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
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

        if (isset($map['Operations'])) {
            $model->operations = $map['Operations'];
        }

        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }

        return $model;
    }
}
