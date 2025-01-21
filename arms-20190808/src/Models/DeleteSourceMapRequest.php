<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class DeleteSourceMapRequest extends Model
{
    /**
     * @var string[]
     */
    public $fidList;
    /**
     * @var string
     */
    public $pid;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'fidList'  => 'FidList',
        'pid'      => 'Pid',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->fidList)) {
            Model::validateArray($this->fidList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fidList) {
            if (\is_array($this->fidList)) {
                $res['FidList'] = [];
                $n1             = 0;
                foreach ($this->fidList as $item1) {
                    $res['FidList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
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
        if (isset($map['FidList'])) {
            if (!empty($map['FidList'])) {
                $model->fidList = [];
                $n1             = 0;
                foreach ($map['FidList'] as $item1) {
                    $model->fidList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
