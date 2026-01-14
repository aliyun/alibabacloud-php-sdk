<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;

class ListIspTypesResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $ispTypeList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ispTypeList' => 'IspTypeList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->ispTypeList)) {
            Model::validateArray($this->ispTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ispTypeList) {
            if (\is_array($this->ispTypeList)) {
                $res['IspTypeList'] = [];
                $n1 = 0;
                foreach ($this->ispTypeList as $item1) {
                    $res['IspTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['IspTypeList'])) {
            if (!empty($map['IspTypeList'])) {
                $model->ispTypeList = [];
                $n1 = 0;
                foreach ($map['IspTypeList'] as $item1) {
                    $model->ispTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
