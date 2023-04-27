<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResourceLogStatusResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The protected object.
     *
     * @example alb-wewbb23dfsetetcic****
     *
     * @var string
     */
    public $resource;

    /**
     * @description Indicates whether the log collection feature is enabled for the protected object. Valid values:
     *
     *   **true:** The log collection feature is enabled.
     *   **false:** The log collection feature is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $status;
    protected $_name = [
        'resource' => 'Resource',
        'status'   => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
