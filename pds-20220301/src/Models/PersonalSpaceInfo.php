<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class PersonalSpaceInfo extends Model
{
    /**
     * @var int
     */
    public $totalSize;

    /**
     * @var int
     */
    public $usedSize;
    protected $_name = [
        'totalSize' => 'total_size',
        'usedSize'  => 'used_size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalSize) {
            $res['total_size'] = $this->totalSize;
        }
        if (null !== $this->usedSize) {
            $res['used_size'] = $this->usedSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PersonalSpaceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['total_size'])) {
            $model->totalSize = $map['total_size'];
        }
        if (isset($map['used_size'])) {
            $model->usedSize = $map['used_size'];
        }

        return $model;
    }
}
