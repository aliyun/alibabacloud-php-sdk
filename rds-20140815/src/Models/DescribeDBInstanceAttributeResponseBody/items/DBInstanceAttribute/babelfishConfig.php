<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute;

use AlibabaCloud\Tea\Model;

class babelfishConfig extends Model
{
    /**
     * @description Indicates whether Babelfish is enabled.
     *
     * >  If Babelfish is enabled when you purchase an ApsaraDB RDS for PostgreSQL instance, this parameter is fixed as **true**.
     * @example true
     *
     * @var string
     */
    public $babelfishEnabled;

    /**
     * @description The migration mode for Babelfish. Valid values:
     *
     *   **single-db**
     *   **multi-db**
     *
     * >  For more information about migration modes for Babelfish, see [Migration modes](https://help.aliyun.com/document_detail/428613.html).
     * @example single-db
     *
     * @var string
     */
    public $migrationMode;
    protected $_name = [
        'babelfishEnabled' => 'BabelfishEnabled',
        'migrationMode'    => 'MigrationMode',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return babelfishConfig
     */
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
