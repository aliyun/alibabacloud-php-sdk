<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20220913\Models\GetKnowledgeDataRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string[]
     */
    public $knowledgeIdList;
    protected $_name = [
        'appId' => 'appId',
        'knowledgeIdList' => 'knowledgeIdList',
    ];

    public function validate()
    {
        if (\is_array($this->knowledgeIdList)) {
            Model::validateArray($this->knowledgeIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->knowledgeIdList) {
            if (\is_array($this->knowledgeIdList)) {
                $res['knowledgeIdList'] = [];
                $n1 = 0;
                foreach ($this->knowledgeIdList as $item1) {
                    $res['knowledgeIdList'][$n1] = $item1;
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
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['knowledgeIdList'])) {
            if (!empty($map['knowledgeIdList'])) {
                $model->knowledgeIdList = [];
                $n1 = 0;
                foreach ($map['knowledgeIdList'] as $item1) {
                    $model->knowledgeIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
