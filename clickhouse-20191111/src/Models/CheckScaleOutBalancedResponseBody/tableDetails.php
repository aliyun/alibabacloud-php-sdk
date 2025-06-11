<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\CheckScaleOutBalancedResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CheckScaleOutBalancedResponseBody\tableDetails\tableDetail;

class tableDetails extends Model
{
    /**
     * @var tableDetail[]
     */
    public $tableDetail;
    protected $_name = [
        'tableDetail' => 'TableDetail',
    ];

    public function validate()
    {
        if (\is_array($this->tableDetail)) {
            Model::validateArray($this->tableDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tableDetail) {
            if (\is_array($this->tableDetail)) {
                $res['TableDetail'] = [];
                $n1 = 0;
                foreach ($this->tableDetail as $item1) {
                    $res['TableDetail'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TableDetail'])) {
            if (!empty($map['TableDetail'])) {
                $model->tableDetail = [];
                $n1 = 0;
                foreach ($map['TableDetail'] as $item1) {
                    $model->tableDetail[$n1++] = tableDetail::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
