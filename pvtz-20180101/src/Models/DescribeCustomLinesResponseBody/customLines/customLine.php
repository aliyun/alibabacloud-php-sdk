<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeCustomLinesResponseBody\customLines;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeCustomLinesResponseBody\customLines\customLine\ipv4s;
use AlibabaCloud\Tea\Model;

class customLine extends Model
{
    /**
     * @description The time when the custom line was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2022-03-25T08:07Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the custom line was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1671174074000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The creator of the custom line.
     *
     * @example 21312421
     *
     * @var string
     */
    public $creator;

    /**
     * @description The type of the creator for the custom line. Valid values:
     *
     *   CUSTOM: Alibaba Cloud account
     *   SUB: RAM user
     *   STS: assumed role that obtains the Security Token Service (STS) token of a RAM role
     *   OTHER: other roles
     *
     * @example SUB
     *
     * @var string
     */
    public $creatorSubType;

    /**
     * @description The role of the creator for the custom line. Valid values:
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
     * @var ipv4s
     */
    public $ipv4s;

    /**
     * @description The unique ID of the custom line.
     *
     * @example 160002
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
     * @description The time when the custom line was updated. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2020-08-24T16:08Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The time when the custom line was updated. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1681879029000
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
            $res['Ipv4s'] = null !== $this->ipv4s ? $this->ipv4s->toMap() : null;
        }
        if (null !== $this->lineId) {
            $res['LineId'] = $this->lineId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
     * @return customLine
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
            $model->ipv4s = ipv4s::fromMap($map['Ipv4s']);
        }
        if (isset($map['LineId'])) {
            $model->lineId = $map['LineId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
