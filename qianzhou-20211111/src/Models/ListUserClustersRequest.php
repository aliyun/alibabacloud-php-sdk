<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qianzhou\V20211111\Models;

use AlibabaCloud\Tea\Model;

class ListUserClustersRequest extends Model
{
    /**
     * @var string
     */
    public $current;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $userID;
    protected $_name = [
        'current'  => 'current',
        'pageSize' => 'pageSize',
        'userID'   => 'userID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->current) {
            $res['current'] = $this->current;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->userID) {
            $res['userID'] = $this->userID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserClustersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['current'])) {
            $model->current = $map['current'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['userID'])) {
            $model->userID = $map['userID'];
        }

        return $model;
    }
}
