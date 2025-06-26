<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstanceConfigChangeLogResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstanceConfigChangeLogResponseBody\data\paramChangeLogs;

class data extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var paramChangeLogs[]
     */
    public $paramChangeLogs;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'paramChangeLogs' => 'ParamChangeLogs',
    ];

    public function validate()
    {
        if (\is_array($this->paramChangeLogs)) {
            Model::validateArray($this->paramChangeLogs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->paramChangeLogs) {
            if (\is_array($this->paramChangeLogs)) {
                $res['ParamChangeLogs'] = [];
                $n1 = 0;
                foreach ($this->paramChangeLogs as $item1) {
                    $res['ParamChangeLogs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['ParamChangeLogs'])) {
            if (!empty($map['ParamChangeLogs'])) {
                $model->paramChangeLogs = [];
                $n1 = 0;
                foreach ($map['ParamChangeLogs'] as $item1) {
                    $model->paramChangeLogs[$n1] = paramChangeLogs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
