<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class SaveWhiteListStrategyAssetsRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description This parameter is required.
     *
     * @example [{"status":0,"target":"c98dcd24-fa57-4759-b5ec-f8a4ffeed****"}]
     *
     * @var string
     */
    public $operations;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $relationType;

    /**
     * @example 115.193.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description This parameter is required.
     *
     * @example 2730
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SaveWhiteListStrategyAssetsRequest
     */
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
