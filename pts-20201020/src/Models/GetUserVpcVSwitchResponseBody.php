<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\SDK\PTS\V20201020\Models\GetUserVpcVSwitchResponseBody\vSwitchList;
use AlibabaCloud\Tea\Model;

class GetUserVpcVSwitchResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 5
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 0235E5FC-4C7C-5F0C-843C-FC674F15F947
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example 6
     *
     * @var int
     */
    public $vSwitchCount;

    /**
     * @var vSwitchList[]
     */
    public $vSwitchList;
    protected $_name = [
        'code'           => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'message'        => 'Message',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
        'vSwitchCount'   => 'VSwitchCount',
        'vSwitchList'    => 'VSwitchList',
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
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->vSwitchCount) {
            $res['VSwitchCount'] = $this->vSwitchCount;
        }
        if (null !== $this->vSwitchList) {
            $res['VSwitchList'] = [];
            if (null !== $this->vSwitchList && \is_array($this->vSwitchList)) {
                $n = 0;
                foreach ($this->vSwitchList as $item) {
                    $res['VSwitchList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserVpcVSwitchResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['VSwitchCount'])) {
            $model->vSwitchCount = $map['VSwitchCount'];
        }
        if (isset($map['VSwitchList'])) {
            if (!empty($map['VSwitchList'])) {
                $model->vSwitchList = [];
                $n                  = 0;
                foreach ($map['VSwitchList'] as $item) {
                    $model->vSwitchList[$n++] = null !== $item ? vSwitchList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
