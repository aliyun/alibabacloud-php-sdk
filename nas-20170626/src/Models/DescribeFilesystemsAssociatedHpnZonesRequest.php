<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFilesystemsAssociatedHpnZonesRequest\filesystems;

class DescribeFilesystemsAssociatedHpnZonesRequest extends Model
{
    /**
     * @var filesystems[]
     */
    public $filesystems;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'filesystems' => 'Filesystems',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->filesystems)) {
            Model::validateArray($this->filesystems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filesystems) {
            if (\is_array($this->filesystems)) {
                $res['Filesystems'] = [];
                $n1 = 0;
                foreach ($this->filesystems as $item1) {
                    $res['Filesystems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['Filesystems'])) {
            if (!empty($map['Filesystems'])) {
                $model->filesystems = [];
                $n1 = 0;
                foreach ($map['Filesystems'] as $item1) {
                    $model->filesystems[$n1] = filesystems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
