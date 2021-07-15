<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\ListAiccsRobotResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $robotType;

    /**
     * @var string
     */
    public $atSence;

    /**
     * @var string
     */
    public $atProfession;

    /**
     * @var string
     */
    public $robotName;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'robotType'    => 'RobotType',
        'atSence'      => 'AtSence',
        'atProfession' => 'AtProfession',
        'robotName'    => 'RobotName',
        'id'           => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->robotType) {
            $res['RobotType'] = $this->robotType;
        }
        if (null !== $this->atSence) {
            $res['AtSence'] = $this->atSence;
        }
        if (null !== $this->atProfession) {
            $res['AtProfession'] = $this->atProfession;
        }
        if (null !== $this->robotName) {
            $res['RobotName'] = $this->robotName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RobotType'])) {
            $model->robotType = $map['RobotType'];
        }
        if (isset($map['AtSence'])) {
            $model->atSence = $map['AtSence'];
        }
        if (isset($map['AtProfession'])) {
            $model->atProfession = $map['AtProfession'];
        }
        if (isset($map['RobotName'])) {
            $model->robotName = $map['RobotName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
