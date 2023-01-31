<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetContactWhiteListResponseBody\contactWhitelistList;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 254EB995-DEDF-48A4-9101-9CA5B72FFBCC
     *
     * @var string
     */
    public $contactWhiteListId;

    /**
     * @example 1640174411848
     *
     * @var int
     */
    public $creationTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @example 254EB995-DEDF-48A4-9101-9CA5B72FFBCC
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @example xxx
     *
     * @var string
     */
    public $operator;

    /**
     * @example 13959999999
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'contactWhiteListId' => 'ContactWhiteListId',
        'creationTime'       => 'CreationTime',
        'creator'            => 'Creator',
        'instanceId'         => 'InstanceId',
        'name'               => 'Name',
        'operator'           => 'Operator',
        'phoneNumber'        => 'PhoneNumber',
        'remark'             => 'Remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactWhiteListId) {
            $res['ContactWhiteListId'] = $this->contactWhiteListId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactWhiteListId'])) {
            $model->contactWhiteListId = $map['ContactWhiteListId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
