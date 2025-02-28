<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBNodeRequest;

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
    public $nodeId;
    protected $_name = [
        'classCode' => 'classCode',
        'nodeId'    => 'nodeId',
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

        if (null !== $this->nodeId) {
            $res['nodeId'] = $this->nodeId;
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

        if (isset($map['nodeId'])) {
            $model->nodeId = $map['nodeId'];
        }

        return $model;
    }
}
