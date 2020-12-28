<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models;

use AlibabaCloud\Tea\Model;

class CheckExperimentPermissionForMkRequest extends Model
{
    /**
     * @var string
     */
    public $empId;

    /**
     * @var string
     */
    public $experimentId;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'empId'        => 'EmpId',
        'experimentId' => 'ExperimentId',
        'namespace'    => 'Namespace',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->empId) {
            $res['EmpId'] = $this->empId;
        }
        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckExperimentPermissionForMkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EmpId'])) {
            $model->empId = $map['EmpId'];
        }
        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
