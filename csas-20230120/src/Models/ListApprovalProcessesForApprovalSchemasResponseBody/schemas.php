<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListApprovalProcessesForApprovalSchemasResponseBody;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListApprovalProcessesForApprovalSchemasResponseBody\schemas\processes;
use AlibabaCloud\Tea\Model;

class schemas extends Model
{
    /**
     * @var processes[]
     */
    public $processes;

    /**
     * @example approval-schema-090134f1ebff****
     *
     * @var string
     */
    public $schemaId;
    protected $_name = [
        'processes' => 'Processes',
        'schemaId'  => 'SchemaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->processes) {
            $res['Processes'] = [];
            if (null !== $this->processes && \is_array($this->processes)) {
                $n = 0;
                foreach ($this->processes as $item) {
                    $res['Processes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->schemaId) {
            $res['SchemaId'] = $this->schemaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schemas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Processes'])) {
            if (!empty($map['Processes'])) {
                $model->processes = [];
                $n                = 0;
                foreach ($map['Processes'] as $item) {
                    $model->processes[$n++] = null !== $item ? processes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SchemaId'])) {
            $model->schemaId = $map['SchemaId'];
        }

        return $model;
    }
}
