<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class SaveContactBlockListRequest extends Model
{
    /**
     * @var string[]
     */
    public $contactBlockListList;

    /**
     * @var string
     */
    public $contactBlockListsJson;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'contactBlockListList' => 'ContactBlockListList',
        'contactBlockListsJson' => 'ContactBlockListsJson',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->contactBlockListList)) {
            Model::validateArray($this->contactBlockListList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactBlockListList) {
            if (\is_array($this->contactBlockListList)) {
                $res['ContactBlockListList'] = [];
                $n1 = 0;
                foreach ($this->contactBlockListList as $item1) {
                    $res['ContactBlockListList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->contactBlockListsJson) {
            $res['ContactBlockListsJson'] = $this->contactBlockListsJson;
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
        if (isset($map['ContactBlockListList'])) {
            if (!empty($map['ContactBlockListList'])) {
                $model->contactBlockListList = [];
                $n1 = 0;
                foreach ($map['ContactBlockListList'] as $item1) {
                    $model->contactBlockListList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ContactBlockListsJson'])) {
            $model->contactBlockListsJson = $map['ContactBlockListsJson'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
