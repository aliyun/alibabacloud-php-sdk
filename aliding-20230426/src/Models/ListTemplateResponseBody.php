<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListTemplateResponseBody\templateList;

class ListTemplateResponseBody extends Model
{
    /**
     * @var bool
     */
    public $hasMore;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var templateList[]
     */
    public $templateList;

    /**
     * @var string
     */
    public $vendorRequestId;

    /**
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'hasMore' => 'hasMore',
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
        'templateList' => 'templateList',
        'vendorRequestId' => 'vendorRequestId',
        'vendorType' => 'vendorType',
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
        if (null !== $this->hasMore) {
            $res['hasMore'] = $this->hasMore;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->templateList) {
            if (\is_array($this->templateList)) {
                $res['templateList'] = [];
                $n1 = 0;
                foreach ($this->templateList as $item1) {
                    $res['templateList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }

        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
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
        if (isset($map['hasMore'])) {
            $model->hasMore = $map['hasMore'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['templateList'])) {
            if (!empty($map['templateList'])) {
                $model->templateList = [];
                $n1 = 0;
                foreach ($map['templateList'] as $item1) {
                    $model->templateList[$n1] = templateList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }

        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
