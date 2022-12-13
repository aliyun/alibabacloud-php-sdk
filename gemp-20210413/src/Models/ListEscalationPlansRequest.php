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
    protected $_name = [
        'clientToken'        => 'clientToken',
        'escalationPlanName' => 'escalationPlanName',
        'pageNumber'         => 'pageNumber',
        'pageSize'           => 'pageSize',
        'serviceName'        => 'serviceName',
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
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
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
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        return $model;
    }
}
