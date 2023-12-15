<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class DescribeMembersRequest extends Model
{
    /**
     * @var string
     */
    public $bizid;

    /**
     * @var int
     */
    public $current;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'bizid'    => 'Bizid',
        'current'  => 'Current',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizid) {
            $res['Bizid'] = $this->bizid;
        }
        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMembersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bizid'])) {
            $model->bizid = $map['Bizid'];
        }
        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
