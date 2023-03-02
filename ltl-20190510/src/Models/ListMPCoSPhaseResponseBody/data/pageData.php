<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models\ListMPCoSPhaseResponseBody\data;

use AlibabaCloud\Tea\Model;

class pageData extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $accessPermission;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 196487512811****
     *
     * @var string
     */
    public $phaseId;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'accessPermission' => 'AccessPermission',
        'name'             => 'Name',
        'phaseId'          => 'PhaseId',
        'remark'           => 'Remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPermission) {
            $res['AccessPermission'] = $this->accessPermission;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->phaseId) {
            $res['PhaseId'] = $this->phaseId;
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
        if (isset($map['AccessPermission'])) {
            $model->accessPermission = $map['AccessPermission'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PhaseId'])) {
            $model->phaseId = $map['PhaseId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
