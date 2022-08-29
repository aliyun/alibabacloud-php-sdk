<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListCustomTemplatesResponseBody\customTemplateList;
use AlibabaCloud\Tea\Model;

class ListCustomTemplatesResponseBody extends Model
{
    /**
     * @var customTemplateList[]
     */
    public $customTemplateList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'customTemplateList' => 'CustomTemplateList',
        'requestId'          => 'RequestId',
        'total'              => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customTemplateList) {
            $res['CustomTemplateList'] = [];
            if (null !== $this->customTemplateList && \is_array($this->customTemplateList)) {
                $n = 0;
                foreach ($this->customTemplateList as $item) {
                    $res['CustomTemplateList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCustomTemplatesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomTemplateList'])) {
            if (!empty($map['CustomTemplateList'])) {
                $model->customTemplateList = [];
                $n                         = 0;
                foreach ($map['CustomTemplateList'] as $item) {
                    $model->customTemplateList[$n++] = null !== $item ? customTemplateList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
