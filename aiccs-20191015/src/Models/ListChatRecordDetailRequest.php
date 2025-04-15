<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class ListChatRecordDetailRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var int
     */
    public $closeTimeEnd;

    /**
     * @var int
     */
    public $closeTimeStart;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'closeTimeEnd' => 'CloseTimeEnd',
        'closeTimeStart' => 'CloseTimeStart',
        'currentPage' => 'CurrentPage',
        'instanceId' => 'InstanceId',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
