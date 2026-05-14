<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListInstanceModelResponseBody\instanceModelList;

class ListInstanceModelResponseBody extends Model
{
    /**
     * @var instanceModelList[]
     */
    public $instanceModelList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceModelList' => 'instanceModelList',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceModelList)) {
            Model::validateArray($this->instanceModelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceModelList) {
            if (\is_array($this->instanceModelList)) {
                $res['instanceModelList'] = [];
                $n1 = 0;
                foreach ($this->instanceModelList as $item1) {
                    $res['instanceModelList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['instanceModelList'])) {
            if (!empty($map['instanceModelList'])) {
                $model->instanceModelList = [];
                $n1 = 0;
                foreach ($map['instanceModelList'] as $item1) {
                    $model->instanceModelList[$n1] = instanceModelList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
