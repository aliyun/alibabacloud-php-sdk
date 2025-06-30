<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\SearchCustomLinesResponseBody\customLines;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\SearchCustomLinesResponseBody\customLines\customLine\ipv4s;

class customLine extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $creatorSubType;

    /**
     * @var string
     */
    public $creatorType;

    /**
     * @var ipv4s
     */
    public $ipv4s;

    /**
     * @var string
     */
    public $lineId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'createTime' => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'creator' => 'Creator',
        'creatorSubType' => 'CreatorSubType',
        'creatorType' => 'CreatorType',
        'ipv4s' => 'Ipv4s',
        'lineId' => 'LineId',
        'name' => 'Name',
        'updateTime' => 'UpdateTime',
        'updateTimestamp' => 'UpdateTimestamp',
    ];

    public function validate()
    {
        if (null !== $this->ipv4s) {
            $this->ipv4s->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Ipv4s'] = null !== $this->ipv4s ? $this->ipv4s->toArray($noStream) : $this->ipv4s;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
