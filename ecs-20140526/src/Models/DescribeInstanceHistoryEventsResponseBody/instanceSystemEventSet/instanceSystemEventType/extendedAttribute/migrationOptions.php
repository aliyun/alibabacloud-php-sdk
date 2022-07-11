<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet\instanceSystemEventType\extendedAttribute;

use AlibabaCloud\Tea\Model;

class migrationOptions extends Model
{
    /**
     * @var string[]
     */
    public $migrationOption;
    protected $_name = [
        'migrationOption' => 'MigrationOption',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->migrationOption) {
            $res['MigrationOption'] = $this->migrationOption;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return migrationOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MigrationOption'])) {
            if (!empty($map['MigrationOption'])) {
                $model->migrationOption = $map['MigrationOption'];
            }
        }

        return $model;
    }
}
