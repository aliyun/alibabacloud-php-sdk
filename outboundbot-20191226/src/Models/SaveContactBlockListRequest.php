<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class SaveContactBlockListRequest extends Model
{
    /**
     * @example []
     *
     * @var string[]
     */
    public $contactBlockListList;

    /**
     * @example {}
     *
     * @var string
     */
    public $contactBlockListsJson;

    /**
     * @example c3c92de8-e4bd-4db4-a962-50f8acce40bc
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'contactBlockListList'  => 'ContactBlockListList',
        'contactBlockListsJson' => 'ContactBlockListsJson',
        'instanceId'            => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactBlockListList) {
            $res['ContactBlockListList'] = $this->contactBlockListList;
        }
        if (null !== $this->contactBlockListsJson) {
            $res['ContactBlockListsJson'] = $this->contactBlockListsJson;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveContactBlockListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactBlockListList'])) {
            if (!empty($map['ContactBlockListList'])) {
                $model->contactBlockListList = $map['ContactBlockListList'];
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
