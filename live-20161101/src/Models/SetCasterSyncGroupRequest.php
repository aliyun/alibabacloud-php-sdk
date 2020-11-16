<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\SetCasterSyncGroupRequest\syncGroup;
use AlibabaCloud\Tea\Model;

class SetCasterSyncGroupRequest extends Model
{
    /**
     * @var string
     */
    public $casterId;

    /**
     * @var syncGroup[]
     */
    public $syncGroup;
    protected $_name = [
        'casterId'  => 'CasterId',
        'syncGroup' => 'SyncGroup',
    ];

    public function validate()
    {
        Model::validateRequired('casterId', $this->casterId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->syncGroup) {
            $res['SyncGroup'] = [];
            if (null !== $this->syncGroup && \is_array($this->syncGroup)) {
                $n = 0;
                foreach ($this->syncGroup as $item) {
                    $res['SyncGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetCasterSyncGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['SyncGroup'])) {
            if (!empty($map['SyncGroup'])) {
                $model->syncGroup = [];
                $n                = 0;
                foreach ($map['SyncGroup'] as $item) {
                    $model->syncGroup[$n++] = null !== $item ? syncGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
