<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyAppVulScanCycleRequest extends Model
{
    /**
     * @example 1week
     *
     * @var string
     */
    public $cycle;
    protected $_name = [
        'cycle' => 'Cycle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cycle) {
            $res['Cycle'] = $this->cycle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAppVulScanCycleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cycle'])) {
            $model->cycle = $map['Cycle'];
        }

        return $model;
    }
}
