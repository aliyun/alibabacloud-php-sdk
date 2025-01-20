<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCorrectOrderRequest\param;

use AlibabaCloud\Dara\Model;

class dbItemList extends Model
{
    /**
     * @var int
     */
    public $dbId;
    /**
     * @var int
     */
    public $instanceId;
    /**
     * @var bool
     */
    public $logic;
    protected $_name = [
        'dbId'       => 'DbId',
        'instanceId' => 'InstanceId',
        'logic'      => 'Logic',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
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
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }

        return $model;
    }
}
