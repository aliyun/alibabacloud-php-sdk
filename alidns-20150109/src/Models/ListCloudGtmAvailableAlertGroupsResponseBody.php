<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmAvailableAlertGroupsResponseBody\alertGroups;

class ListCloudGtmAvailableAlertGroupsResponseBody extends Model
{
    /**
     * @var alertGroups
     */
    public $alertGroups;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'alertGroups' => 'AlertGroups',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->alertGroups) {
            $this->alertGroups->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertGroups) {
            $res['AlertGroups'] = null !== $this->alertGroups ? $this->alertGroups->toArray($noStream) : $this->alertGroups;
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
        if (isset($map['AlertGroups'])) {
            $model->alertGroups = alertGroups::fromMap($map['AlertGroups']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
