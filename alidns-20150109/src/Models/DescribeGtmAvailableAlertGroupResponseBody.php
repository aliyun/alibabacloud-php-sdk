<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeGtmAvailableAlertGroupResponseBody extends Model
{
    /**
     * @description The available alert groups of the GTM instance.
     *
     * @var string
     */
    public $availableAlertGroup;

    /**
     * @description The ID of the request.
     *
     * @example 29D0F8F8-5499-4F6C-9FDC-1EE13BF55925
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'availableAlertGroup' => 'AvailableAlertGroup',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableAlertGroup) {
            $res['AvailableAlertGroup'] = $this->availableAlertGroup;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGtmAvailableAlertGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableAlertGroup'])) {
            $model->availableAlertGroup = $map['AvailableAlertGroup'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
