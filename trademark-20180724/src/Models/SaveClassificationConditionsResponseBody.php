<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\SDK\Trademark\V20180724\Models\SaveClassificationConditionsResponseBody\invalidList;
use AlibabaCloud\Tea\Model;

class SaveClassificationConditionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var invalidList[]
     */
    public $invalidList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $tagName;
    protected $_name = [
        'errorMsg'    => 'ErrorMsg',
        'invalidList' => 'InvalidList',
        'requestId'   => 'RequestId',
        'success'     => 'Success',
        'tagName'     => 'TagName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->invalidList) {
            $res['InvalidList'] = [];
            if (null !== $this->invalidList && \is_array($this->invalidList)) {
                $n = 0;
                foreach ($this->invalidList as $item) {
                    $res['InvalidList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveClassificationConditionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['InvalidList'])) {
            if (!empty($map['InvalidList'])) {
                $model->invalidList = [];
                $n                  = 0;
                foreach ($map['InvalidList'] as $item) {
                    $model->invalidList[$n++] = null !== $item ? invalidList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }

        return $model;
    }
}
