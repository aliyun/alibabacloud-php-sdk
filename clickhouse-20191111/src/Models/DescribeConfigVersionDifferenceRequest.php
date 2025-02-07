<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Dara\Model;

class DescribeConfigVersionDifferenceRequest extends Model
{
    /**
     * @var string
     */
    public $changeId;
    /**
     * @var string
     */
    public $DBClusterId;
    protected $_name = [
        'changeId'    => 'ChangeId',
        'DBClusterId' => 'DBClusterId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeId) {
            $res['ChangeId'] = $this->changeId;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
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
        if (isset($map['ChangeId'])) {
            $model->changeId = $map['ChangeId'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        return $model;
    }
}
