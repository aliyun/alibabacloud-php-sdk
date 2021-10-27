<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class CheckConnectivityRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $dbInfo;

    /**
     * @var int
     */
    public $dbType;
    protected $_name = [
        'dbInfo' => 'DbInfo',
        'dbType' => 'DbType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbInfo) {
            $res['DbInfo'] = $this->dbInfo;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckConnectivityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbInfo'])) {
            $model->dbInfo = $map['DbInfo'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }

        return $model;
    }
}
