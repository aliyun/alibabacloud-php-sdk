<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmAvailableAlertGroupsResponseBody\alertGroups;
use AlibabaCloud\Tea\Model;

class ListCloudGtmAvailableAlertGroupsResponseBody extends Model
{
    /**
     * @var alertGroups
     */
    public $alertGroups;

    /**
     * @example 536E9CAD-DB30-4647-AC87-AA5CC38C5382
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'alertGroups' => 'AlertGroups',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertGroups) {
            $res['AlertGroups'] = null !== $this->alertGroups ? $this->alertGroups->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCloudGtmAvailableAlertGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertGroups'])) {
            $model->alertGroups = alertGroups::fromMap($map['AlertGroups']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
