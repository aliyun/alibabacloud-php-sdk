<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribePropertyPortDetailRequest extends Model
{
    /**
     * @var string
     */
    public $bindIp;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var string
     */
    public $extend;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $port;
    /**
     * @var string
     */
    public $procName;
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
    public $uuid;
    protected $_name = [
        'bindIp'                     => 'BindIp',
        'currentPage'                => 'CurrentPage',
        'extend'                     => 'Extend',
        'pageSize'                   => 'PageSize',
        'port'                       => 'Port',
        'procName'                   => 'ProcName',
        'remark'                     => 'Remark',
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'uuid'                       => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindIp) {
            $res['BindIp'] = $this->bindIp;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->procName) {
            $res['ProcName'] = $this->procName;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
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
        if (isset($map['BindIp'])) {
            $model->bindIp = $map['BindIp'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['ProcName'])) {
            $model->procName = $map['ProcName'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
