<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\UpgradeMinorVersionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The instance ID.
     *
     * @example cc-uf6x229yeq166****
     *
     * @var string
     */
    public $DBInstanceName;
    protected $_name = [
        'DBInstanceName' => 'DBInstanceName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
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
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        return $model;
    }
}
