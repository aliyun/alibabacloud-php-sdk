<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInternetOpenDetailRequest;

use AlibabaCloud\Dara\Model;

class sortList extends Model
{
    /**
     * @var string
     */
    public $dir;

    /**
     * @var string
     */
    public $sortKey;
    protected $_name = [
        'dir' => 'Dir',
        'sortKey' => 'SortKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dir) {
            $res['Dir'] = $this->dir;
        }

        if (null !== $this->sortKey) {
            $res['SortKey'] = $this->sortKey;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dir'])) {
            $model->dir = $map['Dir'];
        }

        if (isset($map['SortKey'])) {
            $model->sortKey = $map['SortKey'];
        }

        return $model;
    }
}
