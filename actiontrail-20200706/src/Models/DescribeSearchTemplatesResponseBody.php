<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeSearchTemplatesResponseBody\templateList;

class DescribeSearchTemplatesResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var templateList[]
     */
    public $templateList;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'templateList' => 'TemplateList',
    ];

    public function validate()
    {
        if (\is_array($this->templateList)) {
            Model::validateArray($this->templateList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->templateList) {
            if (\is_array($this->templateList)) {
                $res['TemplateList'] = [];
                $n1 = 0;
                foreach ($this->templateList as $item1) {
                    $res['TemplateList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TemplateList'])) {
            if (!empty($map['TemplateList'])) {
                $model->templateList = [];
                $n1 = 0;
                foreach ($map['TemplateList'] as $item1) {
                    $model->templateList[$n1] = templateList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
