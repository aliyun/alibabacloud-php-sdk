<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAITemplateResponseBody\templateInfoList;

class ListAITemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var templateInfoList[]
     */
    public $templateInfoList;
    protected $_name = [
        'requestId' => 'RequestId',
        'templateInfoList' => 'TemplateInfoList',
    ];

    public function validate()
    {
        if (\is_array($this->templateInfoList)) {
            Model::validateArray($this->templateInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->templateInfoList) {
            if (\is_array($this->templateInfoList)) {
                $res['TemplateInfoList'] = [];
                $n1 = 0;
                foreach ($this->templateInfoList as $item1) {
                    $res['TemplateInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TemplateInfoList'])) {
            if (!empty($map['TemplateInfoList'])) {
                $model->templateInfoList = [];
                $n1 = 0;
                foreach ($map['TemplateInfoList'] as $item1) {
                    $model->templateInfoList[$n1++] = templateInfoList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
