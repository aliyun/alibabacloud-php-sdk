<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ListPublishedAgentResponseBody\data\list_\applicationConfig;

use AlibabaCloud\Dara\Model;

class ragConfig extends Model
{
    /**
     * @var bool
     */
    public $enableCitation;

    /**
     * @var bool
     */
    public $enableSearch;

    /**
     * @var string[]
     */
    public $knowledgeBaseCodeList;

    /**
     * @var int
     */
    public $topK;
    protected $_name = [
        'enableCitation' => 'enableCitation',
        'enableSearch' => 'enableSearch',
        'knowledgeBaseCodeList' => 'knowledgeBaseCodeList',
        'topK' => 'topK',
    ];

    public function validate()
    {
        if (\is_array($this->knowledgeBaseCodeList)) {
            Model::validateArray($this->knowledgeBaseCodeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableCitation) {
            $res['enableCitation'] = $this->enableCitation;
        }

        if (null !== $this->enableSearch) {
            $res['enableSearch'] = $this->enableSearch;
        }

        if (null !== $this->knowledgeBaseCodeList) {
            if (\is_array($this->knowledgeBaseCodeList)) {
                $res['knowledgeBaseCodeList'] = [];
                $n1 = 0;
                foreach ($this->knowledgeBaseCodeList as $item1) {
                    $res['knowledgeBaseCodeList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->topK) {
            $res['topK'] = $this->topK;
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
        if (isset($map['enableCitation'])) {
            $model->enableCitation = $map['enableCitation'];
        }

        if (isset($map['enableSearch'])) {
            $model->enableSearch = $map['enableSearch'];
        }

        if (isset($map['knowledgeBaseCodeList'])) {
            if (!empty($map['knowledgeBaseCodeList'])) {
                $model->knowledgeBaseCodeList = [];
                $n1 = 0;
                foreach ($map['knowledgeBaseCodeList'] as $item1) {
                    $model->knowledgeBaseCodeList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['topK'])) {
            $model->topK = $map['topK'];
        }

        return $model;
    }
}
