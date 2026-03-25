<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ImportKMSSecretsForHostRequest\secrets;

class ImportKMSSecretsForHostRequest extends Model
{
    /**
     * @var int
     */
    public $hostId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var secrets[]
     */
    public $secrets;
    protected $_name = [
        'hostId' => 'HostId',
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
        'secrets' => 'Secrets',
    ];

    public function validate()
    {
        if (\is_array($this->secrets)) {
            Model::validateArray($this->secrets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->secrets) {
            if (\is_array($this->secrets)) {
                $res['Secrets'] = [];
                $n1 = 0;
                foreach ($this->secrets as $item1) {
                    $res['Secrets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Secrets'])) {
            if (!empty($map['Secrets'])) {
                $model->secrets = [];
                $n1 = 0;
                foreach ($map['Secrets'] as $item1) {
                    $model->secrets[$n1] = secrets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
