<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFilesystemsAssociatedHpnZonesResponseBody;

use AlibabaCloud\Dara\Model;

class filesystems extends Model
{
    /**
     * @var string[]
     */
    public $associatedHpnZones;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'associatedHpnZones' => 'AssociatedHpnZones',
        'fileSystemId' => 'FileSystemId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->associatedHpnZones)) {
            Model::validateArray($this->associatedHpnZones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associatedHpnZones) {
            if (\is_array($this->associatedHpnZones)) {
                $res['AssociatedHpnZones'] = [];
                $n1 = 0;
                foreach ($this->associatedHpnZones as $item1) {
                    $res['AssociatedHpnZones'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['AssociatedHpnZones'])) {
            if (!empty($map['AssociatedHpnZones'])) {
                $model->associatedHpnZones = [];
                $n1 = 0;
                foreach ($map['AssociatedHpnZones'] as $item1) {
                    $model->associatedHpnZones[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
