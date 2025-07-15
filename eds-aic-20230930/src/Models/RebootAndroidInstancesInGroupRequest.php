<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class RebootAndroidInstancesInGroupRequest extends Model
{
    /**
     * @description The IDs of the cloud phone instances.
     *
     * @var string[]
     */
    public $androidInstanceIds;

    /**
     * @description Specifies whether to enforce a restart operation. If a cloud phone instance fails to stop due to system or network issues, a forced restart can be triggered, though it may result in data loss.
     *
     * Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $forceStop;

    /**
     * @var string
     */
    public $saleMode;
    protected $_name = [
        'androidInstanceIds' => 'AndroidInstanceIds',
        'forceStop' => 'ForceStop',
        'saleMode' => 'SaleMode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidInstanceIds) {
            $res['AndroidInstanceIds'] = $this->androidInstanceIds;
        }
        if (null !== $this->forceStop) {
            $res['ForceStop'] = $this->forceStop;
        }
        if (null !== $this->saleMode) {
            $res['SaleMode'] = $this->saleMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RebootAndroidInstancesInGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidInstanceIds'])) {
            if (!empty($map['AndroidInstanceIds'])) {
                $model->androidInstanceIds = $map['AndroidInstanceIds'];
            }
        }
        if (isset($map['ForceStop'])) {
            $model->forceStop = $map['ForceStop'];
        }
        if (isset($map['SaleMode'])) {
            $model->saleMode = $map['SaleMode'];
        }

        return $model;
    }
}
