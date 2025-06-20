<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateVocabRequest\wordWeightList;

class CreateVocabRequest extends Model
{
    /**
     * @var string
     */
    public $audioModelCode;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var wordWeightList[]
     */
    public $wordWeightList;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'audioModelCode' => 'audioModelCode',
        'description' => 'description',
        'name' => 'name',
        'wordWeightList' => 'wordWeightList',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->wordWeightList)) {
            Model::validateArray($this->wordWeightList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioModelCode) {
            $res['audioModelCode'] = $this->audioModelCode;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->wordWeightList) {
            if (\is_array($this->wordWeightList)) {
                $res['wordWeightList'] = [];
                $n1 = 0;
                foreach ($this->wordWeightList as $item1) {
                    $res['wordWeightList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['audioModelCode'])) {
            $model->audioModelCode = $map['audioModelCode'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['wordWeightList'])) {
            if (!empty($map['wordWeightList'])) {
                $model->wordWeightList = [];
                $n1 = 0;
                foreach ($map['wordWeightList'] as $item1) {
                    $model->wordWeightList[$n1] = wordWeightList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
