<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeSystemPropertyTemplatesResponseBody\systemPropertyTemplateModel;
use AlibabaCloud\Tea\Model;

class DescribeSystemPropertyTemplatesResponseBody extends Model
{
    /**
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6kU****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Id of the request
     *
     * @example 5C5CEF0A-D6E1-58D3-8750-67DB4F82****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var systemPropertyTemplateModel[]
     */
    public $systemPropertyTemplateModel;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'systemPropertyTemplateModel' => 'SystemPropertyTemplateModel',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->systemPropertyTemplateModel) {
            $res['SystemPropertyTemplateModel'] = [];
            if (null !== $this->systemPropertyTemplateModel && \is_array($this->systemPropertyTemplateModel)) {
                $n = 0;
                foreach ($this->systemPropertyTemplateModel as $item) {
                    $res['SystemPropertyTemplateModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSystemPropertyTemplatesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SystemPropertyTemplateModel'])) {
            if (!empty($map['SystemPropertyTemplateModel'])) {
                $model->systemPropertyTemplateModel = [];
                $n = 0;
                foreach ($map['SystemPropertyTemplateModel'] as $item) {
                    $model->systemPropertyTemplateModel[$n++] = null !== $item ? systemPropertyTemplateModel::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
