<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\AttachInstanceSDGRequest\loadOpt;

class AttachInstanceSDGRequest extends Model
{
    /**
     * @var string
     */
    public $diskAccessProtocol;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var loadOpt
     */
    public $loadOpt;

    /**
     * @var string
     */
    public $SDGId;
    protected $_name = [
        'diskAccessProtocol' => 'DiskAccessProtocol',
        'diskType' => 'DiskType',
        'instanceIds' => 'InstanceIds',
        'loadOpt' => 'LoadOpt',
        'SDGId' => 'SDGId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        if (null !== $this->loadOpt) {
            $this->loadOpt->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diskAccessProtocol) {
            $res['DiskAccessProtocol'] = $this->diskAccessProtocol;
        }

        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->loadOpt) {
            $res['LoadOpt'] = null !== $this->loadOpt ? $this->loadOpt->toArray($noStream) : $this->loadOpt;
        }

        if (null !== $this->SDGId) {
            $res['SDGId'] = $this->SDGId;
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
        if (isset($map['DiskAccessProtocol'])) {
            $model->diskAccessProtocol = $map['DiskAccessProtocol'];
        }

        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }

        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LoadOpt'])) {
            $model->loadOpt = loadOpt::fromMap($map['LoadOpt']);
        }

        if (isset($map['SDGId'])) {
            $model->SDGId = $map['SDGId'];
        }

        return $model;
    }
}
