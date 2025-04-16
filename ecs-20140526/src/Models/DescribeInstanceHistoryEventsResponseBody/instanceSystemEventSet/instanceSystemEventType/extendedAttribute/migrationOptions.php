<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet\instanceSystemEventType\extendedAttribute;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->migrationOption)) {
            Model::validateArray($this->migrationOption);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->migrationOption) {
            if (\is_array($this->migrationOption)) {
                $res['MigrationOption'] = [];
                $n1 = 0;
                foreach ($this->migrationOption as $item1) {
                    $res['MigrationOption'][$n1++] = $item1;
                }
            }
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
        if (isset($map['MigrationOption'])) {
            if (!empty($map['MigrationOption'])) {
                $model->migrationOption = [];
                $n1 = 0;
                foreach ($map['MigrationOption'] as $item1) {
                    $model->migrationOption[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
