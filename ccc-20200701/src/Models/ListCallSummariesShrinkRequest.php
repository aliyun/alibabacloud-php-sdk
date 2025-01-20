<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;

class ListCallSummariesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $contactIdListShrink;
    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'contactIdListShrink' => 'ContactIdList',
        'instanceId'          => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactIdListShrink) {
            $res['ContactIdList'] = $this->contactIdListShrink;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['ContactIdList'])) {
            $model->contactIdListShrink = $map['ContactIdList'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
