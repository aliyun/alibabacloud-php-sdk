<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliyunAuth\V20181222\Models\QueryAuthResponseBody\data\infoDTOList;

use AlibabaCloud\Dara\Model;

class infoDTOList extends Model
{
    /**
     * @var string
     */
    public $authOrderVid;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var string
     */
    public $itemRecordVid;

    /**
     * @var string
     */
    public $operateCode;
    protected $_name = [
        'authOrderVid' => 'AuthOrderVid',
        'itemName' => 'ItemName',
        'itemRecordVid' => 'ItemRecordVid',
        'operateCode' => 'OperateCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authOrderVid) {
            $res['AuthOrderVid'] = $this->authOrderVid;
        }

        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }

        if (null !== $this->itemRecordVid) {
            $res['ItemRecordVid'] = $this->itemRecordVid;
        }

        if (null !== $this->operateCode) {
            $res['OperateCode'] = $this->operateCode;
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
        if (isset($map['AuthOrderVid'])) {
            $model->authOrderVid = $map['AuthOrderVid'];
        }

        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }

        if (isset($map['ItemRecordVid'])) {
            $model->itemRecordVid = $map['ItemRecordVid'];
        }

        if (isset($map['OperateCode'])) {
            $model->operateCode = $map['OperateCode'];
        }

        return $model;
    }
}
