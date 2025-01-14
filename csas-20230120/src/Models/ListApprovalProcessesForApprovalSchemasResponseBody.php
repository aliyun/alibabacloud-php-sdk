<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListApprovalProcessesForApprovalSchemasResponseBody\schemas;
use AlibabaCloud\Tea\Model;

class ListApprovalProcessesForApprovalSchemasResponseBody extends Model
{
    /**
     * @example BE4FB974-11BC-5453-9BE1-1606A73EACA6
     *
     * @var string
     */
    public $requestId;

    /**
     * @var schemas[]
     */
    public $schemas;
    protected $_name = [
        'requestId' => 'RequestId',
        'schemas'   => 'Schemas',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return ListApprovalProcessesForApprovalSchemasResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Schemas'])) {
            if (!empty($map['Schemas'])) {
                $model->schemas = [];
                $n              = 0;
                foreach ($map['Schemas'] as $item) {
                    $model->schemas[$n++] = null !== $item ? schemas::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
