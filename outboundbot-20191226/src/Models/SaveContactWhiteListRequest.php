<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class SaveContactWhiteListRequest extends Model
{
    /**
     * @var string[]
     */
    public $contactWhiteListList;

    /**
     * @var string
     */
    public $contactWhiteListsJson;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'contactWhiteListList' => 'ContactWhiteListList',
        'contactWhiteListsJson' => 'ContactWhiteListsJson',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->contactWhiteListList)) {
            Model::validateArray($this->contactWhiteListList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactWhiteListList) {
            if (\is_array($this->contactWhiteListList)) {
                $res['ContactWhiteListList'] = [];
                $n1 = 0;
                foreach ($this->contactWhiteListList as $item1) {
                    $res['ContactWhiteListList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->contactWhiteListsJson) {
            $res['ContactWhiteListsJson'] = $this->contactWhiteListsJson;
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
        if (isset($map['ContactWhiteListList'])) {
            if (!empty($map['ContactWhiteListList'])) {
                $model->contactWhiteListList = [];
                $n1 = 0;
                foreach ($map['ContactWhiteListList'] as $item1) {
                    $model->contactWhiteListList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ContactWhiteListsJson'])) {
            $model->contactWhiteListsJson = $map['ContactWhiteListsJson'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
