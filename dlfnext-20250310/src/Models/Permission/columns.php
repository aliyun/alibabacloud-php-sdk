<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models\Permission;

use AlibabaCloud\Dara\Model;

class columns extends Model
{
    /**
     * @var string[]
     */
    public $columnNames;

    /**
     * @var string[]
     */
    public $excludedColumnNames;
    protected $_name = [
        'columnNames' => 'columnNames',
        'excludedColumnNames' => 'excludedColumnNames',
    ];

    public function validate()
    {
        if (\is_array($this->columnNames)) {
            Model::validateArray($this->columnNames);
        }
        if (\is_array($this->excludedColumnNames)) {
            Model::validateArray($this->excludedColumnNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnNames) {
            if (\is_array($this->columnNames)) {
                $res['columnNames'] = [];
                $n1 = 0;
                foreach ($this->columnNames as $item1) {
                    $res['columnNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->excludedColumnNames) {
            if (\is_array($this->excludedColumnNames)) {
                $res['excludedColumnNames'] = [];
                $n1 = 0;
                foreach ($this->excludedColumnNames as $item1) {
                    $res['excludedColumnNames'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['columnNames'])) {
            if (!empty($map['columnNames'])) {
                $model->columnNames = [];
                $n1 = 0;
                foreach ($map['columnNames'] as $item1) {
                    $model->columnNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['excludedColumnNames'])) {
            if (!empty($map['excludedColumnNames'])) {
                $model->excludedColumnNames = [];
                $n1 = 0;
                foreach ($map['excludedColumnNames'] as $item1) {
                    $model->excludedColumnNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
