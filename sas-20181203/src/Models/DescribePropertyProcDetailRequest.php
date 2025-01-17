<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribePropertyProcDetailRequest extends Model
{
    /**
     * @var string
     */
    public $cmdline;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var string
     */
    public $extend;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var int
     */
    public $procTimeEnd;
    /**
     * @var int
     */
    public $procTimeStart;
    /**
     * @var string
     */
    public $remark;
    /**
     * @var int
     */
    public $resourceDirectoryAccountId;
    /**
     * @var string
     */
    public $user;
    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'cmdline'                    => 'Cmdline',
        'currentPage'                => 'CurrentPage',
        'extend'                     => 'Extend',
        'name'                       => 'Name',
        'pageSize'                   => 'PageSize',
        'procTimeEnd'                => 'ProcTimeEnd',
        'procTimeStart'              => 'ProcTimeStart',
        'remark'                     => 'Remark',
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'user'                       => 'User',
        'uuid'                       => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cmdline) {
            $res['Cmdline'] = $this->cmdline;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->procTimeEnd) {
            $res['ProcTimeEnd'] = $this->procTimeEnd;
        }

        if (null !== $this->procTimeStart) {
            $res['ProcTimeStart'] = $this->procTimeStart;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
        }

        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['Cmdline'])) {
            $model->cmdline = $map['Cmdline'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProcTimeEnd'])) {
            $model->procTimeEnd = $map['ProcTimeEnd'];
        }

        if (isset($map['ProcTimeStart'])) {
            $model->procTimeStart = $map['ProcTimeStart'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
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
