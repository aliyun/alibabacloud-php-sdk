<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLServerUpgradeVersionsResponseBody\items\item\SQLServerUpgradeVersions\SQLServerUpgradeVersion;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLServerUpgradeVersionsResponseBody\items\item\SQLServerUpgradeVersions\SQLServerUpgradeVersion\DBInstanceClassItems\DBInstanceClassItem;

class DBInstanceClassItems extends Model
{
    /**
     * @var DBInstanceClassItem[]
     */
    public $DBInstanceClassItem;
    protected $_name = [
        'DBInstanceClassItem' => 'DBInstanceClassItem',
    ];

    public function validate()
    {
        if (\is_array($this->DBInstanceClassItem)) {
            Model::validateArray($this->DBInstanceClassItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceClassItem) {
            if (\is_array($this->DBInstanceClassItem)) {
                $res['DBInstanceClassItem'] = [];
                $n1 = 0;
                foreach ($this->DBInstanceClassItem as $item1) {
                    $res['DBInstanceClassItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['DBInstanceClassItem'])) {
            if (!empty($map['DBInstanceClassItem'])) {
                $model->DBInstanceClassItem = [];
                $n1 = 0;
                foreach ($map['DBInstanceClassItem'] as $item1) {
                    $model->DBInstanceClassItem[$n1] = DBInstanceClassItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
