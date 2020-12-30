<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeNoticeConfigResponseBody\noticeConfigList;
use AlibabaCloud\Tea\Model;

class DescribeNoticeConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var noticeConfigList[]
     */
    public $noticeConfigList;
    protected $_name = [
        'requestId'        => 'RequestId',
        'noticeConfigList' => 'NoticeConfigList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->noticeConfigList) {
            $res['NoticeConfigList'] = [];
            if (null !== $this->noticeConfigList && \is_array($this->noticeConfigList)) {
                $n = 0;
                foreach ($this->noticeConfigList as $item) {
                    $res['NoticeConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNoticeConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NoticeConfigList'])) {
            if (!empty($map['NoticeConfigList'])) {
                $model->noticeConfigList = [];
                $n                       = 0;
                foreach ($map['NoticeConfigList'] as $item) {
                    $model->noticeConfigList[$n++] = null !== $item ? noticeConfigList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
