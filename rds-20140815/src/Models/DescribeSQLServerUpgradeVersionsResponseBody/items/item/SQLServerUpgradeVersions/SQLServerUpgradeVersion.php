<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLServerUpgradeVersionsResponseBody\items\item\SQLServerUpgradeVersions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLServerUpgradeVersionsResponseBody\items\item\SQLServerUpgradeVersions\SQLServerUpgradeVersion\DBInstanceClassItems;

class SQLServerUpgradeVersion extends Model
{
    /**
     * @var DBInstanceClassItems
     */
    public $DBInstanceClassItems;

    /**
     * @var string
     */
    public $enableUpgrade;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'DBInstanceClassItems' => 'DBInstanceClassItems',
        'enableUpgrade' => 'EnableUpgrade',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (null !== $this->DBInstanceClassItems) {
            $this->DBInstanceClassItems->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceClassItems) {
            $res['DBInstanceClassItems'] = null !== $this->DBInstanceClassItems ? $this->DBInstanceClassItems->toArray($noStream) : $this->DBInstanceClassItems;
        }

        if (null !== $this->enableUpgrade) {
            $res['EnableUpgrade'] = $this->enableUpgrade;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['DBInstanceClassItems'])) {
            $model->DBInstanceClassItems = DBInstanceClassItems::fromMap($map['DBInstanceClassItems']);
        }

        if (isset($map['EnableUpgrade'])) {
            $model->enableUpgrade = $map['EnableUpgrade'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
