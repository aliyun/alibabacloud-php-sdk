<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class UpdateProjectRequest extends Model
{
    /**
     * @var string
     */
    public $project;

    /**
     * @var int
     */
    public $newCU;

    /**
     * @var string
     */
    public $newServiceRole;
    protected $_name = [
        'project'        => 'Project',
        'newCU'          => 'NewCU',
        'newServiceRole' => 'NewServiceRole',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->newCU) {
            $res['NewCU'] = $this->newCU;
        }
        if (null !== $this->newServiceRole) {
            $res['NewServiceRole'] = $this->newServiceRole;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['NewCU'])) {
            $model->newCU = $map['NewCU'];
        }
        if (isset($map['NewServiceRole'])) {
            $model->newServiceRole = $map['NewServiceRole'];
        }

        return $model;
    }
}
