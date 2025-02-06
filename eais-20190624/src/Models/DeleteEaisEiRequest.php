<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624\Models;

use AlibabaCloud\Dara\Model;

class DeleteEaisEiRequest extends Model
{
    /**
     * @var string
     */
    public $eiInstanceId;
    /**
     * @var bool
     */
    public $force;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'eiInstanceId' => 'EiInstanceId',
        'force'        => 'Force',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eiInstanceId) {
            $res['EiInstanceId'] = $this->eiInstanceId;
        }

        if (null !== $this->force) {
            $res['Force'] = $this->force;
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
        if (isset($map['EiInstanceId'])) {
            $model->eiInstanceId = $map['EiInstanceId'];
        }

        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
