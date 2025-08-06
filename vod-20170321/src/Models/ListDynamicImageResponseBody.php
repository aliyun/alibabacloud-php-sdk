<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListDynamicImageResponseBody\dynamicImageList;

class ListDynamicImageResponseBody extends Model
{
    /**
     * @var dynamicImageList[]
     */
    public $dynamicImageList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dynamicImageList' => 'DynamicImageList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->dynamicImageList)) {
            Model::validateArray($this->dynamicImageList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dynamicImageList) {
            if (\is_array($this->dynamicImageList)) {
                $res['DynamicImageList'] = [];
                $n1 = 0;
                foreach ($this->dynamicImageList as $item1) {
                    $res['DynamicImageList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DynamicImageList'])) {
            if (!empty($map['DynamicImageList'])) {
                $model->dynamicImageList = [];
                $n1 = 0;
                foreach ($map['DynamicImageList'] as $item1) {
                    $model->dynamicImageList[$n1] = dynamicImageList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
