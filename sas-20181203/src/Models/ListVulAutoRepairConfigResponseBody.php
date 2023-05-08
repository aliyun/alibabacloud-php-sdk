<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListVulAutoRepairConfigResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListVulAutoRepairConfigResponseBody\vulAutoRepairConfigList;
use AlibabaCloud\Tea\Model;

class ListVulAutoRepairConfigResponseBody extends Model
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
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @example 3B3F3A90-46A5-4023-A2D8-D68B14262F96
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
     * @var vulAutoRepairConfigList[]
     */
    public $vulAutoRepairConfigList;
    protected $_name = [
        'code'                    => 'Code',
        'httpStatusCode'          => 'HttpStatusCode',
        'message'                 => 'Message',
        'pageInfo'                => 'PageInfo',
        'requestId'               => 'RequestId',
        'success'                 => 'Success',
        'vulAutoRepairConfigList' => 'VulAutoRepairConfigList',
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
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->vulAutoRepairConfigList) {
            $res['VulAutoRepairConfigList'] = [];
            if (null !== $this->vulAutoRepairConfigList && \is_array($this->vulAutoRepairConfigList)) {
                $n = 0;
                foreach ($this->vulAutoRepairConfigList as $item) {
                    $res['VulAutoRepairConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVulAutoRepairConfigResponseBody
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
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['VulAutoRepairConfigList'])) {
            if (!empty($map['VulAutoRepairConfigList'])) {
                $model->vulAutoRepairConfigList = [];
                $n                              = 0;
                foreach ($map['VulAutoRepairConfigList'] as $item) {
                    $model->vulAutoRepairConfigList[$n++] = null !== $item ? vulAutoRepairConfigList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
