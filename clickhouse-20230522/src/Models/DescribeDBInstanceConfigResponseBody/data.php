<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstanceConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstanceConfigResponseBody\data\params;

class data extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var params[]
     */
    public $params;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'params' => 'Params',
    ];

    public function validate()
    {
        if (\is_array($this->params)) {
            Model::validateArray($this->params);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->params) {
            if (\is_array($this->params)) {
                $res['Params'] = [];
                $n1 = 0;
                foreach ($this->params as $item1) {
                    $res['Params'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['Params'])) {
            if (!empty($map['Params'])) {
                $model->params = [];
                $n1 = 0;
                foreach ($map['Params'] as $item1) {
                    $model->params[$n1] = params::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
