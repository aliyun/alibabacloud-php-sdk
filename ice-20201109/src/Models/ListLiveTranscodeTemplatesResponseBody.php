<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveTranscodeTemplatesResponseBody\templateContentList;

class ListLiveTranscodeTemplatesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var templateContentList[]
     */
    public $templateContentList;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'           => 'RequestId',
        'templateContentList' => 'TemplateContentList',
        'totalCount'          => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->templateContentList)) {
            Model::validateArray($this->templateContentList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->templateContentList) {
            if (\is_array($this->templateContentList)) {
                $res['TemplateContentList'] = [];
                $n1                         = 0;
                foreach ($this->templateContentList as $item1) {
                    $res['TemplateContentList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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

        if (isset($map['TemplateContentList'])) {
            if (!empty($map['TemplateContentList'])) {
                $model->templateContentList = [];
                $n1                         = 0;
                foreach ($map['TemplateContentList'] as $item1) {
                    $model->templateContentList[$n1++] = templateContentList::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
