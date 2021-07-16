<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListSourceEventsRequest extends Model
{
    /**
     * @description 报警或者事件ID
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description INCIDENT 事件、ALERT 报警、PROBLEM 故障
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description startRowKey 用来查询下一页的数据
     *
     * @var string
     */
    public $startRowKey;

    /**
     * @description stopRowKey 用来查询上一页的数据
     *
     * @var string
     */
    public $stopRowKey;

    /**
     * @description 页大小
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 幂等号
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 当前页
     *
     * @var int
     */
    public $pageNumber;
    protected $_name = [
        'instanceId'   => 'instanceId',
        'instanceType' => 'instanceType',
        'startRowKey'  => 'startRowKey',
        'stopRowKey'   => 'stopRowKey',
        'pageSize'     => 'pageSize',
        'clientToken'  => 'clientToken',
        'pageNumber'   => 'pageNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }
        if (null !== $this->startRowKey) {
            $res['startRowKey'] = $this->startRowKey;
        }
        if (null !== $this->stopRowKey) {
            $res['stopRowKey'] = $this->stopRowKey;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSourceEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }
        if (isset($map['startRowKey'])) {
            $model->startRowKey = $map['startRowKey'];
        }
        if (isset($map['stopRowKey'])) {
            $model->stopRowKey = $map['stopRowKey'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        return $model;
    }
}
