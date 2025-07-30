<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models\CreateDBClusterBindingResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example selectdb-cn-7213cjv2ez-be
     *
     * @var string
     */
    public $dbClusterId;

    /**
     * @description The numeric ID.
     *
     * @example 6585
     *
     * @var string
     */
    public $dbInstanceId;

    /**
     * @description The instance ID.
     *
     * @example selectdb-cn-7213cjv2ez
     *
     * @var string
     */
    public $dbInstanceName;
    protected $_name = [
        'dbClusterId' => 'DbClusterId',
        'dbInstanceId' => 'DbInstanceId',
        'dbInstanceName' => 'DbInstanceName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbClusterId) {
            $res['DbClusterId'] = $this->dbClusterId;
        }
        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }
        if (null !== $this->dbInstanceName) {
            $res['DbInstanceName'] = $this->dbInstanceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbClusterId'])) {
            $model->dbClusterId = $map['DbClusterId'];
        }
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }
        if (isset($map['DbInstanceName'])) {
            $model->dbInstanceName = $map['DbInstanceName'];
        }

        return $model;
    }
}
