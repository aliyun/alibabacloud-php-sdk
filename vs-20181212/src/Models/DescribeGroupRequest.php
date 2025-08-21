<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class DescribeGroupRequest extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $includeStats;

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'id' => 'Id',
        'includeStats' => 'IncludeStats',
        'ownerId' => 'OwnerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->includeStats) {
            $res['IncludeStats'] = $this->includeStats;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IncludeStats'])) {
            $model->includeStats = $map['IncludeStats'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
