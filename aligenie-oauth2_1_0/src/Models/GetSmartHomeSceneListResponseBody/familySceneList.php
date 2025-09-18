<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\GetSmartHomeSceneListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\GetSmartHomeSceneListResponseBody\familySceneList\sceneList;

class familySceneList extends Model
{
    /**
     * @var string
     */
    public $familyId;

    /**
     * @var string
     */
    public $familyName;

    /**
     * @var sceneList[]
     */
    public $sceneList;
    protected $_name = [
        'familyId' => 'familyId',
        'familyName' => 'familyName',
        'sceneList' => 'sceneList',
    ];

    public function validate()
    {
        if (\is_array($this->sceneList)) {
            Model::validateArray($this->sceneList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->familyId) {
            $res['familyId'] = $this->familyId;
        }

        if (null !== $this->familyName) {
            $res['familyName'] = $this->familyName;
        }

        if (null !== $this->sceneList) {
            if (\is_array($this->sceneList)) {
                $res['sceneList'] = [];
                $n1 = 0;
                foreach ($this->sceneList as $item1) {
                    $res['sceneList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['familyId'])) {
            $model->familyId = $map['familyId'];
        }

        if (isset($map['familyName'])) {
            $model->familyName = $map['familyName'];
        }

        if (isset($map['sceneList'])) {
            if (!empty($map['sceneList'])) {
                $model->sceneList = [];
                $n1 = 0;
                foreach ($map['sceneList'] as $item1) {
                    $model->sceneList[$n1] = sceneList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
