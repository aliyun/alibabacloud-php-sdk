<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList\sendDetail\channelResultList;

use AlibabaCloud\Tea\Model;

class resultList extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string[]
     */
    public $notifyTargetList;
    protected $_name = [
        'code'             => 'Code',
        'detail'           => 'Detail',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
        'notifyTargetList' => 'notifyTargetList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->notifyTargetList) {
            $res['notifyTargetList'] = $this->notifyTargetList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['notifyTargetList'])) {
            if (!empty($map['notifyTargetList'])) {
                $model->notifyTargetList = $map['notifyTargetList'];
            }
        }

        return $model;
    }
}
