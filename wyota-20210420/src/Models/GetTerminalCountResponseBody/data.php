<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\GetTerminalCountResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $bindUserCount;

    /**
     * @var int
     */
    public $inManageCount;

    /**
     * @var int
     */
    public $notInManageCount;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'bindUserCount' => 'BindUserCount',
        'inManageCount' => 'InManageCount',
        'notInManageCount' => 'NotInManageCount',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindUserCount) {
            $res['BindUserCount'] = $this->bindUserCount;
        }

        if (null !== $this->inManageCount) {
            $res['InManageCount'] = $this->inManageCount;
        }

        if (null !== $this->notInManageCount) {
            $res['NotInManageCount'] = $this->notInManageCount;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['BindUserCount'])) {
            $model->bindUserCount = $map['BindUserCount'];
        }

        if (isset($map['InManageCount'])) {
            $model->inManageCount = $map['InManageCount'];
        }

        if (isset($map['NotInManageCount'])) {
            $model->notInManageCount = $map['NotInManageCount'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
