<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Notifications\V20241225\Models\ReadNumGroupTotalResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $groupCode;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $readCount;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $unReadCount;
    protected $_name = [
        'groupCode' => 'GroupCode',
        'id' => 'Id',
        'readCount' => 'ReadCount',
        'totalCount' => 'TotalCount',
        'unReadCount' => 'UnReadCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupCode) {
            $res['GroupCode'] = $this->groupCode;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->readCount) {
            $res['ReadCount'] = $this->readCount;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->unReadCount) {
            $res['UnReadCount'] = $this->unReadCount;
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
        if (isset($map['GroupCode'])) {
            $model->groupCode = $map['GroupCode'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ReadCount'])) {
            $model->readCount = $map['ReadCount'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['UnReadCount'])) {
            $model->unReadCount = $map['UnReadCount'];
        }

        return $model;
    }
}
