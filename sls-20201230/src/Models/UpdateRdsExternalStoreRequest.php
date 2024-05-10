<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateRdsExternalStoreRequest\parameter;
use AlibabaCloud\Tea\Model;

class UpdateRdsExternalStoreRequest extends Model
{
    /**
     * @description The name of the external store.
     *
     * This parameter is required.
     * @example rds_store
     *
     * @var string
     */
    public $externalStoreName;

    /**
     * @description The parameter struct.
     *
     * This parameter is required.
     * @var parameter
     */
    public $parameter;

    /**
     * @description The storage type. Set the value to rds-vpc, which indicates an ApsaraDB RDS for MySQL database in a virtual private cloud (VPC).
     *
     * This parameter is required.
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
     * @return UpdateRdsExternalStoreRequest
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
