<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20220913\Models;

use AlibabaCloud\Dara\Model;

class ListComputeTask2Request extends Model
{
    /**
     * @var int
     */
    public $clientId;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'clientId' => 'clientId',
        'pageNum' => 'pageNum',
        'pageSize' => 'pageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['clientId'] = $this->clientId;
        }

        if (null !== $this->pageNum) {
            $res['pageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
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
        if (isset($map['clientId'])) {
            $model->clientId = $map['clientId'];
        }

        if (isset($map['pageNum'])) {
            $model->pageNum = $map['pageNum'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        return $model;
    }
}
