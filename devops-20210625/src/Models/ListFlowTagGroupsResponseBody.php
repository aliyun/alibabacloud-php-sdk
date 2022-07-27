<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListFlowTagGroupsResponseBody\flowTagGroups;
use AlibabaCloud\Tea\Model;

class ListFlowTagGroupsResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var flowTagGroups[]
     */
    public $flowTagGroups;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode'     => 'errorCode',
        'errorMessage'  => 'errorMessage',
        'flowTagGroups' => 'flowTagGroups',
        'requestId'     => 'requestId',
        'success'       => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->flowTagGroups) {
            $res['flowTagGroups'] = [];
            if (null !== $this->flowTagGroups && \is_array($this->flowTagGroups)) {
                $n = 0;
                foreach ($this->flowTagGroups as $item) {
                    $res['flowTagGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFlowTagGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['flowTagGroups'])) {
            if (!empty($map['flowTagGroups'])) {
                $model->flowTagGroups = [];
                $n                    = 0;
                foreach ($map['flowTagGroups'] as $item) {
                    $model->flowTagGroups[$n++] = null !== $item ? flowTagGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
