<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListEscalationPlansRequest extends Model
{
    /**
     * @description 升级计划名
     *
     * @var string
     */
    public $escalationPlanName;

    /**
     * @description 服务名称
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description clientToken
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description pageNumber
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'escalationPlanName' => 'escalationPlanName',
        'serviceName'        => 'serviceName',
        'clientToken'        => 'clientToken',
        'pageNumber'         => 'pageNumber',
        'pageSize'           => 'pageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->escalationPlanName) {
            $res['escalationPlanName'] = $this->escalationPlanName;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
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
        if (isset($map['escalationPlanName'])) {
            $model->escalationPlanName = $map['escalationPlanName'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        return $model;
    }
}
