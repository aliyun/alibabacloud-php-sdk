<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentTaskResultResponseBody\data\response;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentTaskResultResponseBody\data\response\tagCategoryResponse\tagCategoryVoList;

class tagCategoryResponse extends Model
{
    /**
     * @var tagCategoryVoList[]
     */
    public $tagCategoryVoList;
    protected $_name = [
        'tagCategoryVoList' => 'TagCategoryVoList',
    ];

    public function validate()
    {
        if (\is_array($this->tagCategoryVoList)) {
            Model::validateArray($this->tagCategoryVoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagCategoryVoList) {
            if (\is_array($this->tagCategoryVoList)) {
                $res['TagCategoryVoList'] = [];
                $n1 = 0;
                foreach ($this->tagCategoryVoList as $item1) {
                    $res['TagCategoryVoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TagCategoryVoList'])) {
            if (!empty($map['TagCategoryVoList'])) {
                $model->tagCategoryVoList = [];
                $n1 = 0;
                foreach ($map['TagCategoryVoList'] as $item1) {
                    $model->tagCategoryVoList[$n1] = tagCategoryVoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
