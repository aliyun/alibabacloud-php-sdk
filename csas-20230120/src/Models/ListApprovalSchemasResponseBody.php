<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListApprovalSchemasResponseBody\schemas;
use AlibabaCloud\Tea\Model;

class ListApprovalSchemasResponseBody extends Model
{
    /**
     * @example 102350E7-1A20-58F5-9D63-ABEA820AE6E1
     *
     * @var string
     */
    public $requestId;

    /**
     * @var schemas[]
     */
    public $schemas;

    /**
     * @example 1
     *
     * @var string
     */
    public $totalNum;
    protected $_name = [
        'requestId' => 'RequestId',
        'schemas'   => 'Schemas',
        'totalNum'  => 'TotalNum',
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
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListApprovalSchemasResponseBody
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
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        return $model;
    }
}
