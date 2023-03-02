<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models\ListMPCoSPhaseGroupResponseBody\data;

use AlibabaCloud\Tea\Model;

class pageData extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @example 987823074334****
     *
     * @var string
     */
    public $phaseGroupId;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'name'         => 'Name',
        'phaseGroupId' => 'PhaseGroupId',
        'remark'       => 'Remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->phaseGroupId) {
            $res['PhaseGroupId'] = $this->phaseGroupId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PhaseGroupId'])) {
            $model->phaseGroupId = $map['PhaseGroupId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
