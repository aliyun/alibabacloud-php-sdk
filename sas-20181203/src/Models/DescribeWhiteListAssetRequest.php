<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeWhiteListAssetRequest extends Model
{
    /**
     * @var string
     */
    public $lang;
    /**
     * @var int
     */
    public $lastMaxId;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $sourceIp;
    /**
     * @var int
     */
    public $strategyId;
    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'lang'       => 'Lang',
        'lastMaxId'  => 'LastMaxId',
        'pageSize'   => 'PageSize',
        'sourceIp'   => 'SourceIp',
        'strategyId' => 'StrategyId',
        'type'       => 'Type',
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

        if (null !== $this->lastMaxId) {
            $res['LastMaxId'] = $this->lastMaxId;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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

        if (isset($map['LastMaxId'])) {
            $model->lastMaxId = $map['LastMaxId'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
