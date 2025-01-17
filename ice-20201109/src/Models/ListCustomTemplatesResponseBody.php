<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListCustomTemplatesResponseBody\customTemplateList;

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
        if (\is_array($this->customTemplateList)) {
            Model::validateArray($this->customTemplateList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customTemplateList) {
            if (\is_array($this->customTemplateList)) {
                $res['CustomTemplateList'] = [];
                $n1                        = 0;
                foreach ($this->customTemplateList as $item1) {
                    $res['CustomTemplateList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomTemplateList'])) {
            if (!empty($map['CustomTemplateList'])) {
                $model->customTemplateList = [];
                $n1                        = 0;
                foreach ($map['CustomTemplateList'] as $item1) {
                    $model->customTemplateList[$n1++] = customTemplateList::fromMap($item1);
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
