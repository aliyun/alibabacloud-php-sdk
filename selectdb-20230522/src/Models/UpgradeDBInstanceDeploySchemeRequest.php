<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\UpgradeDBInstanceDeploySchemeRequest\multiZone;

class UpgradeDBInstanceDeploySchemeRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var multiZone[]
     */
    public $multiZone;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'multiZone' => 'MultiZone',
        'regionId' => 'RegionId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
        if (\is_array($this->multiZone)) {
            Model::validateArray($this->multiZone);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->multiZone) {
            if (\is_array($this->multiZone)) {
                $res['MultiZone'] = [];
                $n1 = 0;
                foreach ($this->multiZone as $item1) {
                    $res['MultiZone'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['MultiZone'])) {
            if (!empty($map['MultiZone'])) {
                $model->multiZone = [];
                $n1 = 0;
                foreach ($map['MultiZone'] as $item1) {
                    $model->multiZone[$n1] = multiZone::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
