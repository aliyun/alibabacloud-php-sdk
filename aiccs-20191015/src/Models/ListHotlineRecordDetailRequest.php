<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class ListHotlineRecordDetailRequest extends Model
{
    /**
     * @description clientToken
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 实例id
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 热线挂断的时间范围
     *
     * @var int
     */
    public $closeTimeEnd;

    /**
     * @description 当前页
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description 每页数据量
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 热线挂断的时间范围
     *
     * @var int
     */
    public $closeTimeStart;
    protected $_name = [
        'clientToken'    => 'ClientToken',
        'instanceId'     => 'InstanceId',
        'closeTimeEnd'   => 'CloseTimeEnd',
        'currentPage'    => 'CurrentPage',
        'pageSize'       => 'PageSize',
        'closeTimeStart' => 'CloseTimeStart',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->closeTimeEnd) {
            $res['CloseTimeEnd'] = $this->closeTimeEnd;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->closeTimeStart) {
            $res['CloseTimeStart'] = $this->closeTimeStart;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHotlineRecordDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['CloseTimeEnd'])) {
            $model->closeTimeEnd = $map['CloseTimeEnd'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CloseTimeStart'])) {
            $model->closeTimeStart = $map['CloseTimeStart'];
        }

        return $model;
    }
}
