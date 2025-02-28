<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\CreateDBNodesRequest;

use AlibabaCloud\Dara\Model;

class DBNode extends Model
{
    /**
     * @var string
     */
    public $classCode;
    /**
     * @var string
     */
    public $vswitchId;
    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'classCode' => 'classCode',
        'vswitchId' => 'vswitchId',
        'zoneId'    => 'zoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->classCode) {
            $res['classCode'] = $this->classCode;
        }

        if (null !== $this->vswitchId) {
            $res['vswitchId'] = $this->vswitchId;
        }

        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
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
        if (isset($map['classCode'])) {
            $model->classCode = $map['classCode'];
        }

        if (isset($map['vswitchId'])) {
            $model->vswitchId = $map['vswitchId'];
        }

        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }

        return $model;
    }
}
