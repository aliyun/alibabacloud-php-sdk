<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624\Models;

use AlibabaCloud\Dara\Model;

class DeleteEaiRequest extends Model
{
    /**
     * @var string
     */
    public $elasticAcceleratedInstanceId;
    /**
     * @var bool
     */
    public $force;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'elasticAcceleratedInstanceId' => 'ElasticAcceleratedInstanceId',
        'force'                        => 'Force',
        'regionId'                     => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticAcceleratedInstanceId) {
            $res['ElasticAcceleratedInstanceId'] = $this->elasticAcceleratedInstanceId;
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
        if (isset($map['ElasticAcceleratedInstanceId'])) {
            $model->elasticAcceleratedInstanceId = $map['ElasticAcceleratedInstanceId'];
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
