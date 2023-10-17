<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Tea\Model;

class RenewInstanceRequest extends Model
{
    /**
     * @description Specifies whether to enable monthly auto-renewal. The default value is false. Valid values:
     *
     *   true
     *   false
     *
     * >  If you enable auto-renewal for an instance for which auto-renewal is enabled, an error is reported.
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The renewal duration. Unit: month.
     *
     * @example 2
     *
     * @var int
     */
    public $duration;
    protected $_name = [
        'autoRenew' => 'autoRenew',
        'duration'  => 'duration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['autoRenew'] = $this->autoRenew;
        }
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RenewInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['autoRenew'])) {
            $model->autoRenew = $map['autoRenew'];
        }
        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        return $model;
    }
}
