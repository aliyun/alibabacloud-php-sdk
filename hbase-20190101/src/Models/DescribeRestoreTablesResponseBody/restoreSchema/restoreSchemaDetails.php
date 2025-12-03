<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreTablesResponseBody\restoreSchema;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreTablesResponseBody\restoreSchema\restoreSchemaDetails\restoreSchemaDetail;

class restoreSchemaDetails extends Model
{
    /**
     * @var restoreSchemaDetail[]
     */
    public $restoreSchemaDetail;
    protected $_name = [
        'restoreSchemaDetail' => 'RestoreSchemaDetail',
    ];

    public function validate()
    {
        if (\is_array($this->restoreSchemaDetail)) {
            Model::validateArray($this->restoreSchemaDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->restoreSchemaDetail) {
            if (\is_array($this->restoreSchemaDetail)) {
                $res['RestoreSchemaDetail'] = [];
                $n1 = 0;
                foreach ($this->restoreSchemaDetail as $item1) {
                    $res['RestoreSchemaDetail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RestoreSchemaDetail'])) {
            if (!empty($map['RestoreSchemaDetail'])) {
                $model->restoreSchemaDetail = [];
                $n1 = 0;
                foreach ($map['RestoreSchemaDetail'] as $item1) {
                    $model->restoreSchemaDetail[$n1] = restoreSchemaDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
