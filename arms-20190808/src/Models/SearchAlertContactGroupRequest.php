<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class SearchAlertContactGroupRequest extends Model
{
    /**
     * @var string
     */
    public $contactGroupName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $proxyUserId;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var int
     */
    public $contactId;

    /**
     * @var string
     */
    public $contactGroupIds;

    /**
     * @var bool
     */
    public $isDetail;
    protected $_name = [
        'contactGroupName' => 'ContactGroupName',
        'regionId'         => 'RegionId',
        'proxyUserId'      => 'ProxyUserId',
        'contactName'      => 'ContactName',
        'contactId'        => 'ContactId',
        'contactGroupIds'  => 'ContactGroupIds',
        'isDetail'         => 'IsDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroupName) {
            $res['ContactGroupName'] = $this->contactGroupName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->proxyUserId) {
            $res['ProxyUserId'] = $this->proxyUserId;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->contactGroupIds) {
            $res['ContactGroupIds'] = $this->contactGroupIds;
        }
        if (null !== $this->isDetail) {
            $res['IsDetail'] = $this->isDetail;
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
        if (isset($map['ContactGroupName'])) {
            $model->contactGroupName = $map['ContactGroupName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ProxyUserId'])) {
            $model->proxyUserId = $map['ProxyUserId'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['ContactGroupIds'])) {
            $model->contactGroupIds = $map['ContactGroupIds'];
        }
        if (isset($map['IsDetail'])) {
            $model->isDetail = $map['IsDetail'];
        }

        return $model;
    }
}
