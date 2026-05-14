<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DescribeSDGShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $SDGIdsShrink;

    /**
     * @var bool
     */
    public $sameDiskId;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'SDGIdsShrink' => 'SDGIds',
        'sameDiskId' => 'SameDiskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->SDGIdsShrink) {
            $res['SDGIds'] = $this->SDGIdsShrink;
        }

        if (null !== $this->sameDiskId) {
            $res['SameDiskId'] = $this->sameDiskId;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SDGIds'])) {
            $model->SDGIdsShrink = $map['SDGIds'];
        }

        if (isset($map['SameDiskId'])) {
            $model->sameDiskId = $map['SameDiskId'];
        }

        return $model;
    }
}
