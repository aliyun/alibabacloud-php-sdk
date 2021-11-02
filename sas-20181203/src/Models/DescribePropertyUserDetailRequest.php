<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribePropertyUserDetailRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $isRoot;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $user;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'isRoot'      => 'IsRoot',
        'pageSize'    => 'PageSize',
        'remark'      => 'Remark',
        'user'        => 'User',
        'uuid'        => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->isRoot) {
            $res['IsRoot'] = $this->isRoot;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePropertyUserDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['IsRoot'])) {
            $model->isRoot = $map['IsRoot'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
