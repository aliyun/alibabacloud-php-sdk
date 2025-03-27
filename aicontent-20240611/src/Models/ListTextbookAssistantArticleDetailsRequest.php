<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ListTextbookAssistantArticleDetailsRequest extends Model
{
    /**
     * @var string[]
     */
    public $articleIdList;

    /**
     * @var string
     */
    public $authToken;
    protected $_name = [
        'articleIdList' => 'articleIdList',
        'authToken' => 'authToken',
    ];

    public function validate()
    {
        if (\is_array($this->articleIdList)) {
            Model::validateArray($this->articleIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->articleIdList) {
            if (\is_array($this->articleIdList)) {
                $res['articleIdList'] = [];
                $n1 = 0;
                foreach ($this->articleIdList as $item1) {
                    $res['articleIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->authToken) {
            $res['authToken'] = $this->authToken;
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
        if (isset($map['articleIdList'])) {
            if (!empty($map['articleIdList'])) {
                $model->articleIdList = [];
                $n1 = 0;
                foreach ($map['articleIdList'] as $item1) {
                    $model->articleIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['authToken'])) {
            $model->authToken = $map['authToken'];
        }

        return $model;
    }
}
