<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListRouteRulesRequest extends Model
{
    /**
     * @example C4BE3837-1A13-413B-A225-2C88188E8A43
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $notFilterRouteRuleDeleted;

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
     * @example 0
     *
     * @var int
     */
    public $routeType;

    /**
     * @example 规则名字
     *
     * @var int[]
     */
    public $ruleName;

    /**
     * @example 冲上云霄
     *
     * @var int[]
     */
    public $serviceName;
    protected $_name = [
        'clientToken'               => 'clientToken',
        'notFilterRouteRuleDeleted' => 'notFilterRouteRuleDeleted',
        'pageNumber'                => 'pageNumber',
        'pageSize'                  => 'pageSize',
        'routeType'                 => 'routeType',
        'ruleName'                  => 'ruleName',
        'serviceName'               => 'serviceName',
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
        if (null !== $this->notFilterRouteRuleDeleted) {
            $res['notFilterRouteRuleDeleted'] = $this->notFilterRouteRuleDeleted;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->routeType) {
            $res['routeType'] = $this->routeType;
        }
        if (null !== $this->ruleName) {
            $res['ruleName'] = $this->ruleName;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRouteRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['notFilterRouteRuleDeleted'])) {
            $model->notFilterRouteRuleDeleted = $map['notFilterRouteRuleDeleted'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['routeType'])) {
            $model->routeType = $map['routeType'];
        }
        if (isset($map['ruleName'])) {
            $model->ruleName = $map['ruleName'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        return $model;
    }
}
