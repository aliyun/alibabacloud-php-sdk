<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryModelGroupsByApiKeyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelGroupDTO;

class data extends Model
{
    /**
     * @var int
     */
    public $clientId;

    /**
     * @var ModelGroupDTO[]
     */
    public $groups;

    /**
     * @var int[]
     */
    public $standaloneModelList;
    protected $_name = [
        'clientId' => 'clientId',
        'groups' => 'groups',
        'standaloneModelList' => 'standaloneModelList',
    ];

    public function validate()
    {
        if (\is_array($this->groups)) {
            Model::validateArray($this->groups);
        }
        if (\is_array($this->standaloneModelList)) {
            Model::validateArray($this->standaloneModelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['clientId'] = $this->clientId;
        }

        if (null !== $this->groups) {
            if (\is_array($this->groups)) {
                $res['groups'] = [];
                $n1 = 0;
                foreach ($this->groups as $item1) {
                    $res['groups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->standaloneModelList) {
            if (\is_array($this->standaloneModelList)) {
                $res['standaloneModelList'] = [];
                $n1 = 0;
                foreach ($this->standaloneModelList as $item1) {
                    $res['standaloneModelList'][$n1] = $item1;
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
        if (isset($map['clientId'])) {
            $model->clientId = $map['clientId'];
        }

        if (isset($map['groups'])) {
            if (!empty($map['groups'])) {
                $model->groups = [];
                $n1 = 0;
                foreach ($map['groups'] as $item1) {
                    $model->groups[$n1] = ModelGroupDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['standaloneModelList'])) {
            if (!empty($map['standaloneModelList'])) {
                $model->standaloneModelList = [];
                $n1 = 0;
                foreach ($map['standaloneModelList'] as $item1) {
                    $model->standaloneModelList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
