<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class DescribeCustomLineInfoResponseBody extends Model
{
    /**
     * @description The time when the custom line was created. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2018-01-23T03:15Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the custom line was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1516775741000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The creator of the custom line.
     *
     * @example 260282302749096109
     *
     * @var string
     */
    public $creator;

    /**
     * @description The type of the creator. Valid values:
     *
     *   CUSTOM: Alibaba Cloud account
     *   SUB: RAM user
     *   STS: assumed role that obtains the Security Token Service (STS) token of a RAM role
     *   OTHER: other roles
     *
     * @example CUSTOM
     *
     * @var string
     */
    public $creatorSubType;

    /**
     * @description The role of the creator. Valid values:
     *
     *   USER: user
     *   SYSTEM: system
     *
     * @example USER
     *
     * @var string
     */
    public $creatorType;

    /**
     * @description The IPv4 CIDR blocks.
     *
     * @var string[]
     */
    public $ipv4s;

    /**
     * @description The unique ID of the custom line.
     *
     * @example 100003
     *
     * @var string
     */
    public $lineId;

    /**
     * @description The name of the custom line.
     *
     * @var string
     */
    public $name;

    /**
     * @description The request ID.
     *
     * @example 0B7AD377-7E86-44A8-B9A8-53E8666E72FE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The time when the custom line was updated. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2018-01-24T06:35Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The time when the custom line was updated. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1516775741000
     *
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'creator'         => 'Creator',
        'creatorSubType'  => 'CreatorSubType',
        'creatorType'     => 'CreatorType',
        'ipv4s'           => 'Ipv4s',
        'lineId'          => 'LineId',
        'name'            => 'Name',
        'requestId'       => 'RequestId',
        'updateTime'      => 'UpdateTime',
        'updateTimestamp' => 'UpdateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->creatorSubType) {
            $res['CreatorSubType'] = $this->creatorSubType;
        }
        if (null !== $this->creatorType) {
            $res['CreatorType'] = $this->creatorType;
        }
        if (null !== $this->ipv4s) {
            $res['Ipv4s'] = $this->ipv4s;
        }
        if (null !== $this->lineId) {
            $res['LineId'] = $this->lineId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCustomLineInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['CreatorSubType'])) {
            $model->creatorSubType = $map['CreatorSubType'];
        }
        if (isset($map['CreatorType'])) {
            $model->creatorType = $map['CreatorType'];
        }
        if (isset($map['Ipv4s'])) {
            if (!empty($map['Ipv4s'])) {
                $model->ipv4s = $map['Ipv4s'];
            }
        }
        if (isset($map['LineId'])) {
            $model->lineId = $map['LineId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }

        return $model;
    }
}
