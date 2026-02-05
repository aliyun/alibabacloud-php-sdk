<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLServerUpgradeVersionsResponseBody\items\item;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLServerUpgradeVersionsResponseBody\items\item\SQLServerUpgradeVersions\SQLServerUpgradeVersion;

class SQLServerUpgradeVersions extends Model
{
    /**
     * @var SQLServerUpgradeVersion[]
     */
    public $SQLServerUpgradeVersion;
    protected $_name = [
        'SQLServerUpgradeVersion' => 'SQLServerUpgradeVersion',
    ];

    public function validate()
    {
        if (\is_array($this->SQLServerUpgradeVersion)) {
            Model::validateArray($this->SQLServerUpgradeVersion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->SQLServerUpgradeVersion) {
            if (\is_array($this->SQLServerUpgradeVersion)) {
                $res['SQLServerUpgradeVersion'] = [];
                $n1 = 0;
                foreach ($this->SQLServerUpgradeVersion as $item1) {
                    $res['SQLServerUpgradeVersion'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SQLServerUpgradeVersion'])) {
            if (!empty($map['SQLServerUpgradeVersion'])) {
                $model->SQLServerUpgradeVersion = [];
                $n1 = 0;
                foreach ($map['SQLServerUpgradeVersion'] as $item1) {
                    $model->SQLServerUpgradeVersion[$n1] = SQLServerUpgradeVersion::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
