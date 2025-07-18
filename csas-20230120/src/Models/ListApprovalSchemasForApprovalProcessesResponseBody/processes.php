<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListApprovalSchemasForApprovalProcessesResponseBody;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListApprovalSchemasForApprovalProcessesResponseBody\processes\schemas;
use AlibabaCloud\Tea\Model;

class processes extends Model
{
    /**
     * @example approval-process-35ee09077ee9****
     *
     * @var string
     */
    public $processId;

    /**
     * @var schemas[]
     */
    public $schemas;
    protected $_name = [
        'processId' => 'ProcessId',
        'schemas' => 'Schemas',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }
        if (null !== $this->schemas) {
            $res['Schemas'] = [];
            if (null !== $this->schemas && \is_array($this->schemas)) {
                $n = 0;
                foreach ($this->schemas as $item) {
                    $res['Schemas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return processes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }
        if (isset($map['Schemas'])) {
            if (!empty($map['Schemas'])) {
                $model->schemas = [];
                $n = 0;
                foreach ($map['Schemas'] as $item) {
                    $model->schemas[$n++] = null !== $item ? schemas::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
