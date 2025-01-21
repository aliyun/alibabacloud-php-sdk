<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class QueryAppMetadataRequest extends Model
{
    /**
     * @var string
     */
    public $metaIds;
    /**
     * @var string
     */
    public $metaType;
    /**
     * @var string
     */
    public $pid;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'metaIds'  => 'MetaIds',
        'metaType' => 'MetaType',
        'pid'      => 'Pid',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metaIds) {
            $res['MetaIds'] = $this->metaIds;
        }

        if (null !== $this->metaType) {
            $res['MetaType'] = $this->metaType;
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
        if (isset($map['MetaIds'])) {
            $model->metaIds = $map['MetaIds'];
        }

        if (isset($map['MetaType'])) {
            $model->metaType = $map['MetaType'];
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
