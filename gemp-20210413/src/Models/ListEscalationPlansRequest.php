<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListEscalationPlansRequest extends Model
{
    /**
     * @example A5A1FEAE-9C47-011C-9C73-A376BC2REQUEST
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example xxx
     *
     * @var string
     */
    public $escalationPlanName;

    /**
     * @var bool
     */
    public $isGlobal;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example ssxx
     *
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'clientToken'        => 'clientToken',
        'escalationPlanName' => 'escalationPlanName',
        'isGlobal'           => 'isGlobal',
        'pageNumber'         => 'pageNumber',
        'pageSize'           => 'pageSize',
        'serviceName'        => 'serviceName',
        'status'             => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->escalationPlanName) {
            $res['escalationPlanName'] = $this->escalationPlanName;
        }
        if (null !== $this->isGlobal) {
            $res['isGlobal'] = $this->isGlobal;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEscalationPlansRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['escalationPlanName'])) {
            $model->escalationPlanName = $map['escalationPlanName'];
        }
        if (isset($map['isGlobal'])) {
            $model->isGlobal = $map['isGlobal'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
