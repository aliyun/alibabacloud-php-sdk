<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListUserProjectsRequest;

use AlibabaCloud\Dara\Model;

class listQuery extends Model
{
    /**
     * @var string
     */
    public $env;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $targetUserId;
    protected $_name = [
        'env' => 'Env',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'targetUserId' => 'TargetUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->targetUserId) {
            $res['TargetUserId'] = $this->targetUserId;
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
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TargetUserId'])) {
            $model->targetUserId = $map['TargetUserId'];
        }

        return $model;
    }
}
