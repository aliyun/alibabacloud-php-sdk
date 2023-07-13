<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactGroupListResponseBody\contactGroupList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactGroupListResponseBody\contactGroups;
use AlibabaCloud\Tea\Model;

class DescribeContactGroupListResponseBody extends Model
{
    /**
     * @description The returned message.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The description of the alert group.
     *
     * @var contactGroupList
     */
    public $contactGroupList;

    /**
     * @description The information about alert groups that were queried.
     *
     * @var contactGroups
     */
    public $contactGroups;

    /**
     * @description The ID of the request.
     *
     * @example The Request is not authorization.
     *
     * @var string
     */
    public $message;

    /**
     * @description The total number of the returned entries.
     *
     * @example 916EE694-03C2-47B6-85EE-5054E3C168D3
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The names of alert groups.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description Indicates whether the call was successful. Valid values:
     *
     *   true: The call was successful.
     *   false: The call failed.
     *
     * @example 22
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'code'             => 'Code',
        'contactGroupList' => 'ContactGroupList',
        'contactGroups'    => 'ContactGroups',
        'message'          => 'Message',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
        'total'            => 'Total',
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
