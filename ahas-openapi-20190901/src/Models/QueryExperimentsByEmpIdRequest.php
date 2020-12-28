<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models;

use AlibabaCloud\Tea\Model;

class QueryExperimentsByEmpIdRequest extends Model
{
    /**
     * @var string
     */
    public $empId;

    /**
     * @var string
     */
    public $namespace;
    protected $_name = [
        'empId'     => 'EmpId',
        'namespace' => 'Namespace',
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
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryExperimentsByEmpIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EmpId'])) {
            $model->empId = $map['EmpId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        return $model;
    }
}
