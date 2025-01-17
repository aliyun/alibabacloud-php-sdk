<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeNoticeConfigResponseBody\noticeConfigList;

class DescribeNoticeConfigResponseBody extends Model
{
    /**
     * @var noticeConfigList[]
     */
    public $noticeConfigList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'noticeConfigList' => 'NoticeConfigList',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->noticeConfigList)) {
            Model::validateArray($this->noticeConfigList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->noticeConfigList) {
            if (\is_array($this->noticeConfigList)) {
                $res['NoticeConfigList'] = [];
                $n1                      = 0;
                foreach ($this->noticeConfigList as $item1) {
                    $res['NoticeConfigList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NoticeConfigList'])) {
            if (!empty($map['NoticeConfigList'])) {
                $model->noticeConfigList = [];
                $n1                      = 0;
                foreach ($map['NoticeConfigList'] as $item1) {
                    $model->noticeConfigList[$n1++] = noticeConfigList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
