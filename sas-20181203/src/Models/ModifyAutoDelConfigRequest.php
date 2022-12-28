<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyAutoDelConfigRequest extends Model
{
    /**
     * @description The number of days after which a detected vulnerability is automatically deleted. Valid values:
     *
     * - 90
     * @example 7
     *
     * @var int
     */
    public $days;
    protected $_name = [
        'days' => 'Days',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->days) {
            $res['Days'] = $this->days;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAutoDelConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Days'])) {
            $model->days = $map['Days'];
        }

        return $model;
    }
}
