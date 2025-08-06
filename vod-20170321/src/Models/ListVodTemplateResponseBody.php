<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListVodTemplateResponseBody\vodTemplateInfoList;

class ListVodTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var vodTemplateInfoList[]
     */
    public $vodTemplateInfoList;
    protected $_name = [
        'requestId' => 'RequestId',
        'vodTemplateInfoList' => 'VodTemplateInfoList',
    ];

    public function validate()
    {
        if (\is_array($this->vodTemplateInfoList)) {
            Model::validateArray($this->vodTemplateInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->vodTemplateInfoList) {
            if (\is_array($this->vodTemplateInfoList)) {
                $res['VodTemplateInfoList'] = [];
                $n1 = 0;
                foreach ($this->vodTemplateInfoList as $item1) {
                    $res['VodTemplateInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['VodTemplateInfoList'])) {
            if (!empty($map['VodTemplateInfoList'])) {
                $model->vodTemplateInfoList = [];
                $n1 = 0;
                foreach ($map['VodTemplateInfoList'] as $item1) {
                    $model->vodTemplateInfoList[$n1] = vodTemplateInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
