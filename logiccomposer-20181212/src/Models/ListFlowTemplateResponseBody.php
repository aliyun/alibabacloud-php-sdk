<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models;

use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListFlowTemplateResponseBody\flowTemplates;
use AlibabaCloud\Tea\Model;

class ListFlowTemplateResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalPage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var flowTemplates[]
     */
    public $flowTemplates;
    protected $_name = [
        'totalPage'     => 'TotalPage',
        'requestId'     => 'RequestId',
        'flowTemplates' => 'FlowTemplates',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->flowTemplates) {
            $res['FlowTemplates'] = [];
            if (null !== $this->flowTemplates && \is_array($this->flowTemplates)) {
                $n = 0;
                foreach ($this->flowTemplates as $item) {
                    $res['FlowTemplates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFlowTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FlowTemplates'])) {
            if (!empty($map['FlowTemplates'])) {
                $model->flowTemplates = [];
                $n                    = 0;
                foreach ($map['FlowTemplates'] as $item) {
                    $model->flowTemplates[$n++] = null !== $item ? flowTemplates::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
