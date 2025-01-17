<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSystemTemplatesResponseBody\systemTemplateList;

class ListSystemTemplatesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var systemTemplateList[]
     */
    public $systemTemplateList;
    /**
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
        if (\is_array($this->systemTemplateList)) {
            Model::validateArray($this->systemTemplateList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->systemTemplateList) {
            if (\is_array($this->systemTemplateList)) {
                $res['SystemTemplateList'] = [];
                $n1                        = 0;
                foreach ($this->systemTemplateList as $item1) {
                    $res['SystemTemplateList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SystemTemplateList'])) {
            if (!empty($map['SystemTemplateList'])) {
                $model->systemTemplateList = [];
                $n1                        = 0;
                foreach ($map['SystemTemplateList'] as $item1) {
                    $model->systemTemplateList[$n1++] = systemTemplateList::fromMap($item1);
                }
            }
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
