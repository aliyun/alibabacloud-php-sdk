<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class ListHotlineRecordDetailRequest extends Model
{
    /**
     * @example 46c1341e-2648-447a-9b11-70b6a298d94d
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 1614582000000
     *
     * @var int
     */
    public $closeTimeEnd;

    /**
     * @example 1614578400000
     *
     * @var int
     */
    public $closeTimeStart;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example ccc_xp_pre***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 100
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'clientToken'    => 'ClientToken',
        'closeTimeEnd'   => 'CloseTimeEnd',
        'closeTimeStart' => 'CloseTimeStart',
        'currentPage'    => 'CurrentPage',
        'instanceId'     => 'InstanceId',
        'pageSize'       => 'PageSize',
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
        if (null !== $this->closeTimeEnd) {
            $res['CloseTimeEnd'] = $this->closeTimeEnd;
        }
        if (null !== $this->closeTimeStart) {
            $res['CloseTimeStart'] = $this->closeTimeStart;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['CloseTimeEnd'])) {
            $model->closeTimeEnd = $map['CloseTimeEnd'];
        }
        if (isset($map['CloseTimeStart'])) {
            $model->closeTimeStart = $map['CloseTimeStart'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
