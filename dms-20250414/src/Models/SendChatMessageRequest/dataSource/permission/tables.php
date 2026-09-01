<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\SendChatMessageRequest\dataSource\permission;

use AlibabaCloud\Dara\Model;

class tables extends Model
{
    /**
     * @var string[]
     */
    public $allowedColumns;

    /**
     * @var string[]
     */
    public $disallowedColumns;

    /**
     * @var string
     */
    public $requiredRowFilter;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'allowedColumns' => 'AllowedColumns',
        'disallowedColumns' => 'DisallowedColumns',
        'requiredRowFilter' => 'RequiredRowFilter',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        if (\is_array($this->allowedColumns)) {
            Model::validateArray($this->allowedColumns);
        }
        if (\is_array($this->disallowedColumns)) {
            Model::validateArray($this->disallowedColumns);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedColumns) {
            if (\is_array($this->allowedColumns)) {
                $res['AllowedColumns'] = [];
                $n1 = 0;
                foreach ($this->allowedColumns as $item1) {
                    $res['AllowedColumns'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->disallowedColumns) {
            if (\is_array($this->disallowedColumns)) {
                $res['DisallowedColumns'] = [];
                $n1 = 0;
                foreach ($this->disallowedColumns as $item1) {
                    $res['DisallowedColumns'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requiredRowFilter) {
            $res['RequiredRowFilter'] = $this->requiredRowFilter;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['AllowedColumns'])) {
            if (!empty($map['AllowedColumns'])) {
                $model->allowedColumns = [];
                $n1 = 0;
                foreach ($map['AllowedColumns'] as $item1) {
                    $model->allowedColumns[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DisallowedColumns'])) {
            if (!empty($map['DisallowedColumns'])) {
                $model->disallowedColumns = [];
                $n1 = 0;
                foreach ($map['DisallowedColumns'] as $item1) {
                    $model->disallowedColumns[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequiredRowFilter'])) {
            $model->requiredRowFilter = $map['RequiredRowFilter'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
