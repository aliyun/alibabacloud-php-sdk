<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class ListServiceTemplatesResponseBody extends Model
{
    /**
     * @example 40325405-579C-4D82****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var ServiceTemplate[]
     */
    public $serviceTemplates;

    /**
     * @example 15
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'        => 'RequestId',
        'serviceTemplates' => 'ServiceTemplates',
        'totalCount'       => 'TotalCount',
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
        if (null !== $this->serviceTemplates) {
            $res['ServiceTemplates'] = [];
            if (null !== $this->serviceTemplates && \is_array($this->serviceTemplates)) {
                $n = 0;
                foreach ($this->serviceTemplates as $item) {
                    $res['ServiceTemplates'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListServiceTemplatesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceTemplates'])) {
            if (!empty($map['ServiceTemplates'])) {
                $model->serviceTemplates = [];
                $n                       = 0;
                foreach ($map['ServiceTemplates'] as $item) {
                    $model->serviceTemplates[$n++] = null !== $item ? ServiceTemplate::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
