<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest;

use AlibabaCloud\Dara\Model;

class DBInstances extends Model
{
    /**
     * @var string
     */
    public $attachMode;
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'attachMode'   => 'AttachMode',
        'DBInstanceId' => 'DBInstanceId',
        'type'         => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachMode) {
            $res['AttachMode'] = $this->attachMode;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AttachMode'])) {
            $model->attachMode = $map['AttachMode'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
