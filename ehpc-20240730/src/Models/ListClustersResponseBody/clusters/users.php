<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponseBody\clusters;

use AlibabaCloud\Tea\Model;

class users extends Model
{
    /**
     * @description The number of ordinary users.
     *
     * @example 2
     *
     * @var int
     */
    public $normalCounts;

    /**
     * @description The number of administrators.
     *
     * @example 2
     *
     * @var int
     */
    public $sudoCounts;
    protected $_name = [
        'normalCounts' => 'NormalCounts',
        'sudoCounts'   => 'SudoCounts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->normalCounts) {
            $res['NormalCounts'] = $this->normalCounts;
        }
        if (null !== $this->sudoCounts) {
            $res['SudoCounts'] = $this->sudoCounts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return users
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NormalCounts'])) {
            $model->normalCounts = $map['NormalCounts'];
        }
        if (isset($map['SudoCounts'])) {
            $model->sudoCounts = $map['SudoCounts'];
        }

        return $model;
    }
}
