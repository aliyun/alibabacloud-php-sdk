<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliyunAuth\V20181222\Models\QueryAuthResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliyunAuth\V20181222\Models\QueryAuthResponseBody\data\infoDTOList;

class data extends Model
{
    /**
     * @var infoDTOList
     */
    public $infoDTOList;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'infoDTOList' => 'InfoDTOList',
        'instanceId' => 'InstanceId',
        'productCode' => 'ProductCode',
    ];

    public function validate()
    {
        if (null !== $this->infoDTOList) {
            $this->infoDTOList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->infoDTOList) {
            $res['InfoDTOList'] = null !== $this->infoDTOList ? $this->infoDTOList->toArray($noStream) : $this->infoDTOList;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
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
        if (isset($map['InfoDTOList'])) {
            $model->infoDTOList = infoDTOList::fromMap($map['InfoDTOList']);
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
