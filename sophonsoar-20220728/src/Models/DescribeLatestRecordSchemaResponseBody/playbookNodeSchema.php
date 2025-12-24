<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeLatestRecordSchemaResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeLatestRecordSchemaResponseBody\playbookNodeSchema\nodeSchema;

class playbookNodeSchema extends Model
{
    /**
     * @var nodeSchema[]
     */
    public $nodeSchema;
    protected $_name = [
        'nodeSchema' => 'NodeSchema',
    ];

    public function validate()
    {
        if (\is_array($this->nodeSchema)) {
            Model::validateArray($this->nodeSchema);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeSchema) {
            if (\is_array($this->nodeSchema)) {
                $res['NodeSchema'] = [];
                $n1 = 0;
                foreach ($this->nodeSchema as $item1) {
                    $res['NodeSchema'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NodeSchema'])) {
            if (!empty($map['NodeSchema'])) {
                $model->nodeSchema = [];
                $n1 = 0;
                foreach ($map['NodeSchema'] as $item1) {
                    $model->nodeSchema[$n1] = nodeSchema::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
