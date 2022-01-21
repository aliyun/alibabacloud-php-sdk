<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\CreateInstantSiteMonitorResponseBody\createResultList;
use AlibabaCloud\Tea\Model;

class CreateInstantSiteMonitorResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var createResultList[]
     */
    public $createResultList;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $success;
    protected $_name = [
        'code'             => 'Code',
        'createResultList' => 'CreateResultList',
        'message'          => 'Message',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
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
        if (null !== $this->createResultList) {
            $res['CreateResultList'] = [];
            if (null !== $this->createResultList && \is_array($this->createResultList)) {
                $n = 0;
                foreach ($this->createResultList as $item) {
                    $res['CreateResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstantSiteMonitorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CreateResultList'])) {
            if (!empty($map['CreateResultList'])) {
                $model->createResultList = [];
                $n                       = 0;
                foreach ($map['CreateResultList'] as $item) {
                    $model->createResultList[$n++] = null !== $item ? createResultList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
