<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class DeleteEnvironmentRequest extends Model
{
    /**
     * @var bool
     */
    public $deletePromInstance;
    /**
     * @var string
     */
    public $environmentId;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'deletePromInstance' => 'DeletePromInstance',
        'environmentId'      => 'EnvironmentId',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deletePromInstance) {
            $res['DeletePromInstance'] = $this->deletePromInstance;
        }

        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
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
        if (isset($map['DeletePromInstance'])) {
            $model->deletePromInstance = $map['DeletePromInstance'];
        }

        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
