<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetSasContainerWebDefenseRuleApplicationResponseBody\containerWebDefenseAppList;

class GetSasContainerWebDefenseRuleApplicationResponseBody extends Model
{
    /**
     * @var containerWebDefenseAppList[]
     */
    public $containerWebDefenseAppList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'containerWebDefenseAppList' => 'ContainerWebDefenseAppList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->containerWebDefenseAppList)) {
            Model::validateArray($this->containerWebDefenseAppList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containerWebDefenseAppList) {
            if (\is_array($this->containerWebDefenseAppList)) {
                $res['ContainerWebDefenseAppList'] = [];
                $n1 = 0;
                foreach ($this->containerWebDefenseAppList as $item1) {
                    $res['ContainerWebDefenseAppList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ContainerWebDefenseAppList'])) {
            if (!empty($map['ContainerWebDefenseAppList'])) {
                $model->containerWebDefenseAppList = [];
                $n1 = 0;
                foreach ($map['ContainerWebDefenseAppList'] as $item1) {
                    $model->containerWebDefenseAppList[$n1] = containerWebDefenseAppList::fromMap($item1);
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
