<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Dara\Model;

class DescribeDirectoriesRequest extends Model
{
    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string[]
     */
    public $directoryId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientId' => 'ClientId',
        'directoryId' => 'DirectoryId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->directoryId)) {
            Model::validateArray($this->directoryId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->directoryId) {
            if (\is_array($this->directoryId)) {
                $res['DirectoryId'] = [];
                $n1 = 0;
                foreach ($this->directoryId as $item1) {
                    $res['DirectoryId'][$n1] = $item1;
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
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['DirectoryId'])) {
            if (!empty($map['DirectoryId'])) {
                $model->directoryId = [];
                $n1 = 0;
                foreach ($map['DirectoryId'] as $item1) {
                    $model->directoryId[$n1] = $item1;
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
