<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateComputeQuotaPlanRequest\quota;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateComputeQuotaPlanRequest\quota\subQuotaInfoList\parameter;
use AlibabaCloud\Tea\Model;

class subQuotaInfoList extends Model
{
    /**
     * @description The nickname of the level-2 quota.
     *
     * This parameter is required.
     *
     * @example os_ComputeQuota
     *
     * @var string
     */
    public $nickName;

    /**
     * @description The parameters of the level-2 quota.
     *
     * @var parameter
     */
    public $parameter;
    protected $_name = [
        'nickName' => 'nickName',
        'parameter' => 'parameter',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nickName) {
            $res['nickName'] = $this->nickName;
        }
        if (null !== $this->parameter) {
            $res['parameter'] = null !== $this->parameter ? $this->parameter->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subQuotaInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['nickName'])) {
            $model->nickName = $map['nickName'];
        }
        if (isset($map['parameter'])) {
            $model->parameter = parameter::fromMap($map['parameter']);
        }

        return $model;
    }
}
