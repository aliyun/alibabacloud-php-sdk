<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponseBody;

use AlibabaCloud\Tea\Model;

class DBProxyAVZones extends Model
{
    /**
     * @var string[]
     */
    public $DBProxyAVZones;
    protected $_name = [
        'DBProxyAVZones' => 'DBProxyAVZones',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBProxyAVZones) {
            $res['DBProxyAVZones'] = $this->DBProxyAVZones;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBProxyAVZones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBProxyAVZones'])) {
            if (!empty($map['DBProxyAVZones'])) {
                $model->DBProxyAVZones = $map['DBProxyAVZones'];
            }
        }

        return $model;
    }
}
