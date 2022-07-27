<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListVariableGroupsResponseBody\variableGroups;
use AlibabaCloud\Tea\Model;

class ListVariableGroupsResponseBody extends Model
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
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var variableGroups[]
     */
    public $variableGroups;
    protected $_name = [
        'errorCode'      => 'errorCode',
        'errorMessage'   => 'errorMessage',
        'nextToken'      => 'nextToken',
        'requestId'      => 'requestId',
        'success'        => 'success',
        'totalCount'     => 'totalCount',
        'variableGroups' => 'variableGroups',
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
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }
        if (null !== $this->variableGroups) {
            $res['variableGroups'] = [];
            if (null !== $this->variableGroups && \is_array($this->variableGroups)) {
                $n = 0;
                foreach ($this->variableGroups as $item) {
                    $res['variableGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVariableGroupsResponseBody
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
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }
        if (isset($map['variableGroups'])) {
            if (!empty($map['variableGroups'])) {
                $model->variableGroups = [];
                $n                     = 0;
                foreach ($map['variableGroups'] as $item) {
                    $model->variableGroups[$n++] = null !== $item ? variableGroups::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
