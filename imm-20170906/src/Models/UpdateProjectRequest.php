<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class UpdateProjectRequest extends Model
{
    /**
     * @var int
     */
    public $newCU;

    /**
     * @var string
     */
    public $newServiceRole;

    /**
     * @var string
     */
    public $project;
    protected $_name = [
        'newCU'          => 'NewCU',
        'newServiceRole' => 'NewServiceRole',
        'project'        => 'Project',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newCU) {
            $res['NewCU'] = $this->newCU;
        }
        if (null !== $this->newServiceRole) {
            $res['NewServiceRole'] = $this->newServiceRole;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
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
        if (isset($map['NewCU'])) {
            $model->newCU = $map['NewCU'];
        }
        if (isset($map['NewServiceRole'])) {
            $model->newServiceRole = $map['NewServiceRole'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }

        return $model;
    }
}
