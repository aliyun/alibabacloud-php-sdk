<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetLevelResponseBody\ensNetLevels;

use AlibabaCloud\Tea\Model;

class ensNetLevel extends Model
{
    /**
     * @description The network level. Valid values:
     *
     *   Big: greater area.
     *   Middle: province.
     *   Small: city.
     *
     * @example Big
     *
     * @var string
     */
    public $ensNetLevelCode;
    protected $_name = [
        'ensNetLevelCode' => 'EnsNetLevelCode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ensNetLevelCode) {
            $res['EnsNetLevelCode'] = $this->ensNetLevelCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ensNetLevel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsNetLevelCode'])) {
            $model->ensNetLevelCode = $map['EnsNetLevelCode'];
        }

        return $model;
    }
}
