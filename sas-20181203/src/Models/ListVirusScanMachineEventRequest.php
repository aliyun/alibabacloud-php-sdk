<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListVirusScanMachineEventRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 233886xx
     *
     * @var string
     */
    public $operateTaskId;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example a6931624-c43e-4323-9128-a6be6ffdxxxx
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'currentPage'   => 'CurrentPage',
        'operateTaskId' => 'OperateTaskId',
        'pageSize'      => 'PageSize',
        'uuid'          => 'Uuid',
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
        if (null !== $this->operateTaskId) {
            $res['OperateTaskId'] = $this->operateTaskId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVirusScanMachineEventRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['OperateTaskId'])) {
            $model->operateTaskId = $map['OperateTaskId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
