<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DownloadDataTrackResultRequest;

use AlibabaCloud\Dara\Model;

class columnFilter extends Model
{
    /**
     * @var string
     */
    public $betweenEnd;

    /**
     * @var string
     */
    public $betweenStart;

    /**
     * @var string
     */
    public $columnName;

    /**
     * @var string[]
     */
    public $inList;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'betweenEnd' => 'BetweenEnd',
        'betweenStart' => 'BetweenStart',
        'columnName' => 'ColumnName',
        'inList' => 'InList',
        'operator' => 'Operator',
        'value' => 'Value',
    ];

    public function validate()
    {
        if (\is_array($this->inList)) {
            Model::validateArray($this->inList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->betweenEnd) {
            $res['BetweenEnd'] = $this->betweenEnd;
        }

        if (null !== $this->betweenStart) {
            $res['BetweenStart'] = $this->betweenStart;
        }

        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }

        if (null !== $this->inList) {
            if (\is_array($this->inList)) {
                $res['InList'] = [];
                $n1 = 0;
                foreach ($this->inList as $item1) {
                    $res['InList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
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
        if (isset($map['BetweenEnd'])) {
            $model->betweenEnd = $map['BetweenEnd'];
        }

        if (isset($map['BetweenStart'])) {
            $model->betweenStart = $map['BetweenStart'];
        }

        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }

        if (isset($map['InList'])) {
            if (!empty($map['InList'])) {
                $model->inList = [];
                $n1 = 0;
                foreach ($map['InList'] as $item1) {
                    $model->inList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
