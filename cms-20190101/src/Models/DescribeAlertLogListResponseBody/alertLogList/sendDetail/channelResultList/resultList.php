<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList\sendDetail\channelResultList;

use AlibabaCloud\Dara\Model;

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
        'code' => 'Code',
        'detail' => 'Detail',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'notifyTargetList' => 'notifyTargetList',
    ];

    public function validate()
    {
        if (\is_array($this->notifyTargetList)) {
            Model::validateArray($this->notifyTargetList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->notifyTargetList)) {
                $res['notifyTargetList'] = [];
                $n1 = 0;
                foreach ($this->notifyTargetList as $item1) {
                    $res['notifyTargetList'][$n1] = $item1;
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
                $model->notifyTargetList = [];
                $n1 = 0;
                foreach ($map['notifyTargetList'] as $item1) {
                    $model->notifyTargetList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
