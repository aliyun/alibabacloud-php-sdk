<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactGroupListResponseBody\contactGroupList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactGroupListResponseBody\contactGroups;
use AlibabaCloud\Tea\Model;

class DescribeContactGroupListResponseBody extends Model
{
    /**
     * @var contactGroupList
     */
    public $contactGroupList;

    /**
     * @var contactGroups
     */
    public $contactGroups;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'contactGroupList' => 'ContactGroupList',
        'contactGroups'    => 'ContactGroups',
        'message'          => 'Message',
        'requestId'        => 'RequestId',
        'total'            => 'Total',
        'code'             => 'Code',
        'success'          => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroupList) {
            $res['ContactGroupList'] = null !== $this->contactGroupList ? $this->contactGroupList->toMap() : null;
        }
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = null !== $this->contactGroups ? $this->contactGroups->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContactGroupListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactGroupList'])) {
            $model->contactGroupList = contactGroupList::fromMap($map['ContactGroupList']);
        }
        if (isset($map['ContactGroups'])) {
            $model->contactGroups = contactGroups::fromMap($map['ContactGroups']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
