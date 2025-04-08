<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;

class ListCallSummariesRequest extends Model
{
    /**
     * @var string[]
     */
    public $contactIdList;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'contactIdList' => 'ContactIdList',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->contactIdList)) {
            Model::validateArray($this->contactIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactIdList) {
            if (\is_array($this->contactIdList)) {
                $res['ContactIdList'] = [];
                $n1 = 0;
                foreach ($this->contactIdList as $item1) {
                    $res['ContactIdList'][$n1++] = $item1;
                }
            }
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
            if (!empty($map['ContactIdList'])) {
                $model->contactIdList = [];
                $n1 = 0;
                foreach ($map['ContactIdList'] as $item1) {
                    $model->contactIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
