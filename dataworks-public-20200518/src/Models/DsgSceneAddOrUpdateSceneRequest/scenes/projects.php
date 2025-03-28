<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgSceneAddOrUpdateSceneRequest\scenes;

use AlibabaCloud\Dara\Model;

class projects extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $projectName;
    protected $_name = [
        'clusterId' => 'clusterId',
        'dbType' => 'dbType',
        'projectName' => 'projectName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['clusterId'] = $this->clusterId;
        }

        if (null !== $this->dbType) {
            $res['dbType'] = $this->dbType;
        }

        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
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
        if (isset($map['clusterId'])) {
            $model->clusterId = $map['clusterId'];
        }

        if (isset($map['dbType'])) {
            $model->dbType = $map['dbType'];
        }

        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }

        return $model;
    }
}
