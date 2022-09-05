<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class SearchAlertContactGroupRequest extends Model
{
    /**
     * @var string
     */
    public $contactGroupIds;

    /**
     * @var string
     */
    public $contactGroupName;

    /**
     * @var int
     */
    public $contactId;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var bool
     */
    public $isDetail;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'contactGroupIds'  => 'ContactGroupIds',
        'contactGroupName' => 'ContactGroupName',
        'contactId'        => 'ContactId',
        'contactName'      => 'ContactName',
        'isDetail'         => 'IsDetail',
        'regionId'         => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroupIds) {
            $res['ContactGroupIds'] = $this->contactGroupIds;
        }
        if (null !== $this->contactGroupName) {
            $res['ContactGroupName'] = $this->contactGroupName;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->isDetail) {
            $res['IsDetail'] = $this->isDetail;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchAlertContactGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactGroupIds'])) {
            $model->contactGroupIds = $map['ContactGroupIds'];
        }
        if (isset($map['ContactGroupName'])) {
            $model->contactGroupName = $map['ContactGroupName'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['IsDetail'])) {
            $model->isDetail = $map['IsDetail'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
