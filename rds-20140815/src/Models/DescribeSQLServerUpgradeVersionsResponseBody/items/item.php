<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLServerUpgradeVersionsResponseBody\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLServerUpgradeVersionsResponseBody\items\item\SQLServerUpgradeVersions;

class item extends Model
{
    /**
     * @var string
     */
    public $currentVersion;

    /**
     * @var SQLServerUpgradeVersions
     */
    public $SQLServerUpgradeVersions;
    protected $_name = [
        'currentVersion' => 'CurrentVersion',
        'SQLServerUpgradeVersions' => 'SQLServerUpgradeVersions',
    ];

    public function validate()
    {
        if (null !== $this->SQLServerUpgradeVersions) {
            $this->SQLServerUpgradeVersions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentVersion) {
            $res['CurrentVersion'] = $this->currentVersion;
        }

        if (null !== $this->SQLServerUpgradeVersions) {
            $res['SQLServerUpgradeVersions'] = null !== $this->SQLServerUpgradeVersions ? $this->SQLServerUpgradeVersions->toArray($noStream) : $this->SQLServerUpgradeVersions;
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
        if (isset($map['CurrentVersion'])) {
            $model->currentVersion = $map['CurrentVersion'];
        }

        if (isset($map['SQLServerUpgradeVersions'])) {
            $model->SQLServerUpgradeVersions = SQLServerUpgradeVersions::fromMap($map['SQLServerUpgradeVersions']);
        }

        return $model;
    }
}
