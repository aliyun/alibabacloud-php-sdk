<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\ListAiccsRobotResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $atProfession;

    /**
     * @var string
     */
    public $atSence;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $robotName;

    /**
     * @var string
     */
    public $robotType;
    protected $_name = [
        'atProfession' => 'AtProfession',
        'atSence' => 'AtSence',
        'id' => 'Id',
        'robotName' => 'RobotName',
        'robotType' => 'RobotType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->atProfession) {
            $res['AtProfession'] = $this->atProfession;
        }

        if (null !== $this->atSence) {
            $res['AtSence'] = $this->atSence;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->robotName) {
            $res['RobotName'] = $this->robotName;
        }

        if (null !== $this->robotType) {
            $res['RobotType'] = $this->robotType;
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
        if (isset($map['AtProfession'])) {
            $model->atProfession = $map['AtProfession'];
        }

        if (isset($map['AtSence'])) {
            $model->atSence = $map['AtSence'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['RobotName'])) {
            $model->robotName = $map['RobotName'];
        }

        if (isset($map['RobotType'])) {
            $model->robotType = $map['RobotType'];
        }

        return $model;
    }
}
