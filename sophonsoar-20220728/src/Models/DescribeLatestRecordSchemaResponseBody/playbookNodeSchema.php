<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeLatestRecordSchemaResponseBody;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeLatestRecordSchemaResponseBody\playbookNodeSchema\nodeSchema;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeSchema) {
            $res['NodeSchema'] = [];
            if (null !== $this->nodeSchema && \is_array($this->nodeSchema)) {
                $n = 0;
                foreach ($this->nodeSchema as $item) {
                    $res['NodeSchema'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return playbookNodeSchema
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeSchema'])) {
            if (!empty($map['NodeSchema'])) {
                $model->nodeSchema = [];
                $n                 = 0;
                foreach ($map['NodeSchema'] as $item) {
                    $model->nodeSchema[$n++] = null !== $item ? nodeSchema::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
