<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute;

use AlibabaCloud\Dara\Model;

class babelfishConfig extends Model
{
    /**
     * @var string
     */
    public $babelfishEnabled;
    /**
     * @var string
     */
    public $migrationMode;
    protected $_name = [
        'babelfishEnabled' => 'BabelfishEnabled',
        'migrationMode'    => 'MigrationMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->babelfishEnabled) {
            $res['BabelfishEnabled'] = $this->babelfishEnabled;
        }

        if (null !== $this->migrationMode) {
            $res['MigrationMode'] = $this->migrationMode;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BabelfishEnabled'])) {
            $model->babelfishEnabled = $map['BabelfishEnabled'];
        }

        if (isset($map['MigrationMode'])) {
            $model->migrationMode = $map['MigrationMode'];
        }

        return $model;
    }
}
