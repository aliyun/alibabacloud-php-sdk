<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\GetSmartHomeSceneListResponseBody\familySceneList;

class GetSmartHomeSceneListResponseBody extends Model
{
    /**
     * @var familySceneList[]
     */
    public $familySceneList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'familySceneList' => 'FamilySceneList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->familySceneList)) {
            Model::validateArray($this->familySceneList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->familySceneList) {
            if (\is_array($this->familySceneList)) {
                $res['FamilySceneList'] = [];
                $n1 = 0;
                foreach ($this->familySceneList as $item1) {
                    $res['FamilySceneList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FamilySceneList'])) {
            if (!empty($map['FamilySceneList'])) {
                $model->familySceneList = [];
                $n1 = 0;
                foreach ($map['FamilySceneList'] as $item1) {
                    $model->familySceneList[$n1] = familySceneList::fromMap($item1);
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
