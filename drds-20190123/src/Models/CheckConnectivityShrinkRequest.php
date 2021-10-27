<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class CheckConnectivityShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dbInfoShrink;

    /**
     * @var int
     */
    public $dbType;
    protected $_name = [
        'dbInfoShrink' => 'DbInfo',
        'dbType'       => 'DbType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbInfoShrink) {
            $res['DbInfo'] = $this->dbInfoShrink;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckConnectivityShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbInfo'])) {
            $model->dbInfoShrink = $map['DbInfo'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }

        return $model;
    }
}
