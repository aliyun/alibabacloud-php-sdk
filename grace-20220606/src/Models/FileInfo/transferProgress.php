<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Grace\V20220606\Models\FileInfo;

use AlibabaCloud\Tea\Model;

class transferProgress extends Model
{
    /**
     * @var int
     */
    public $totalSize;

    /**
     * @var int
     */
    public $transferredSize;
    protected $_name = [
        'totalSize'       => 'totalSize',
        'transferredSize' => 'transferredSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalSize) {
            $res['totalSize'] = $this->totalSize;
        }
        if (null !== $this->transferredSize) {
            $res['transferredSize'] = $this->transferredSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transferProgress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['totalSize'])) {
            $model->totalSize = $map['totalSize'];
        }
        if (isset($map['transferredSize'])) {
            $model->transferredSize = $map['transferredSize'];
        }

        return $model;
    }
}
