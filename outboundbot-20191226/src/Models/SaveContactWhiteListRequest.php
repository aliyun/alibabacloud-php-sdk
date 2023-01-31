<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class SaveContactWhiteListRequest extends Model
{
    /**
     * @example {}
     *
     * @var string[]
     */
    public $contactWhiteListList;

    /**
     * @example {}
     *
     * @var string
     */
    public $contactWhiteListsJson;

    /**
     * @example c415bb6c-2e6f-46aa-afd9-3b65b6dbe2bc
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'contactWhiteListList'  => 'ContactWhiteListList',
        'contactWhiteListsJson' => 'ContactWhiteListsJson',
        'instanceId'            => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactWhiteListList) {
            $res['ContactWhiteListList'] = $this->contactWhiteListList;
        }
        if (null !== $this->contactWhiteListsJson) {
            $res['ContactWhiteListsJson'] = $this->contactWhiteListsJson;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveContactWhiteListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactWhiteListList'])) {
            if (!empty($map['ContactWhiteListList'])) {
                $model->contactWhiteListList = $map['ContactWhiteListList'];
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
