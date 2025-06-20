<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetSupportedResourceRelationConfigResponseBody\resourceRelationConfigList;

class GetSupportedResourceRelationConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceRelationConfigList[]
     */
    public $resourceRelationConfigList;
    protected $_name = [
        'requestId' => 'RequestId',
        'resourceRelationConfigList' => 'ResourceRelationConfigList',
    ];

    public function validate()
    {
        if (\is_array($this->resourceRelationConfigList)) {
            Model::validateArray($this->resourceRelationConfigList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceRelationConfigList) {
            if (\is_array($this->resourceRelationConfigList)) {
                $res['ResourceRelationConfigList'] = [];
                $n1 = 0;
                foreach ($this->resourceRelationConfigList as $item1) {
                    $res['ResourceRelationConfigList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceRelationConfigList'])) {
            if (!empty($map['ResourceRelationConfigList'])) {
                $model->resourceRelationConfigList = [];
                $n1 = 0;
                foreach ($map['ResourceRelationConfigList'] as $item1) {
                    $model->resourceRelationConfigList[$n1] = resourceRelationConfigList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
