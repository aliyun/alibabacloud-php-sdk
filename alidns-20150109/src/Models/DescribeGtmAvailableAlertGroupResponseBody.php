<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class DescribeGtmAvailableAlertGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $availableAlertGroup;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'availableAlertGroup' => 'AvailableAlertGroup',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
