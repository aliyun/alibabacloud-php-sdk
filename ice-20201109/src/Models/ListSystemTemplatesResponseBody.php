<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListSystemTemplatesResponseBody\systemTemplateList;
use AlibabaCloud\Tea\Model;

class ListSystemTemplatesResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example ******11-DB8D-4A9A-875B-275798******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The queried templates.
     *
     * @var systemTemplateList[]
     */
    public $systemTemplateList;

    /**
     * @description The total number of templates.
     *
     * @example 20
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'requestId'          => 'RequestId',
        'systemTemplateList' => 'SystemTemplateList',
        'total'              => 'Total',
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
        if (null !== $this->systemTemplateList) {
            $res['SystemTemplateList'] = [];
            if (null !== $this->systemTemplateList && \is_array($this->systemTemplateList)) {
                $n = 0;
                foreach ($this->systemTemplateList as $item) {
                    $res['SystemTemplateList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSystemTemplatesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SystemTemplateList'])) {
            if (!empty($map['SystemTemplateList'])) {
                $model->systemTemplateList = [];
                $n                         = 0;
                foreach ($map['SystemTemplateList'] as $item) {
                    $model->systemTemplateList[$n++] = null !== $item ? systemTemplateList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
