<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\CreateRdsExternalStoreRequest\parameter;
use AlibabaCloud\Tea\Model;

class CreateRdsExternalStoreRequest extends Model
{
    /**
     * @description The name of the external store. The name must be unique in a project and must be different from Logstore names.
     *
     * @example rds_store
     *
     * @var string
     */
    public $externalStoreName;

    /**
     * @description The parameter struct.
     *
     * @var parameter
     */
    public $parameter;

    /**
     * @description The storage type. Set the value to rds-vpc, which indicates an ApsaraDB RDS for MySQL database in a virtual private cloud (VPC).
     *
     * @example rds-vpc
     *
     * @var string
     */
    public $storeType;
    protected $_name = [
        'externalStoreName' => 'externalStoreName',
        'parameter'         => 'parameter',
        'storeType'         => 'storeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->externalStoreName) {
            $res['externalStoreName'] = $this->externalStoreName;
        }
        if (null !== $this->parameter) {
            $res['parameter'] = null !== $this->parameter ? $this->parameter->toMap() : null;
        }
        if (null !== $this->storeType) {
            $res['storeType'] = $this->storeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRdsExternalStoreRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['externalStoreName'])) {
            $model->externalStoreName = $map['externalStoreName'];
        }
        if (isset($map['parameter'])) {
            $model->parameter = parameter::fromMap($map['parameter']);
        }
        if (isset($map['storeType'])) {
            $model->storeType = $map['storeType'];
        }

        return $model;
    }
}
