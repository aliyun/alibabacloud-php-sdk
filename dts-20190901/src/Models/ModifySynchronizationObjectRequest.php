<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ModifySynchronizationObjectRequest extends Model
{
    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $synchronizationDirection;

    /**
     * @var string
     */
    public $synchronizationJobId;

    /**
     * @var string
     */
    public $synchronizationObjects;
    protected $_name = [
        'ownerId'                  => 'OwnerId',
        'synchronizationDirection' => 'SynchronizationDirection',
        'synchronizationJobId'     => 'SynchronizationJobId',
        'synchronizationObjects'   => 'SynchronizationObjects',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->synchronizationDirection) {
            $res['SynchronizationDirection'] = $this->synchronizationDirection;
        }
        if (null !== $this->synchronizationJobId) {
            $res['SynchronizationJobId'] = $this->synchronizationJobId;
        }
        if (null !== $this->synchronizationObjects) {
            $res['SynchronizationObjects'] = $this->synchronizationObjects;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySynchronizationObjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SynchronizationDirection'])) {
            $model->synchronizationDirection = $map['SynchronizationDirection'];
        }
        if (isset($map['SynchronizationJobId'])) {
            $model->synchronizationJobId = $map['SynchronizationJobId'];
        }
        if (isset($map['SynchronizationObjects'])) {
            $model->synchronizationObjects = $map['SynchronizationObjects'];
        }

        return $model;
    }
}
