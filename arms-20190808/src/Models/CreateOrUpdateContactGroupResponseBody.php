<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateContactGroupResponseBody\alertContactGroup;

class CreateOrUpdateContactGroupResponseBody extends Model
{
    /**
     * @var alertContactGroup
     */
    public $alertContactGroup;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'alertContactGroup' => 'AlertContactGroup',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->alertContactGroup) {
            $this->alertContactGroup->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertContactGroup) {
            $res['AlertContactGroup'] = null !== $this->alertContactGroup ? $this->alertContactGroup->toArray($noStream) : $this->alertContactGroup;
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
        if (isset($map['AlertContactGroup'])) {
            $model->alertContactGroup = alertContactGroup::fromMap($map['AlertContactGroup']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
