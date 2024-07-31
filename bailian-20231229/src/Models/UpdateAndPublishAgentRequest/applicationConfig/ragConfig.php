<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateAndPublishAgentRequest\applicationConfig;

use AlibabaCloud\Tea\Model;

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
        'enableCitation'        => 'enableCitation',
        'enableSearch'          => 'enableSearch',
        'knowledgeBaseCodeList' => 'knowledgeBaseCodeList',
        'topK'                  => 'topK',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableCitation) {
            $res['enableCitation'] = $this->enableCitation;
        }
        if (null !== $this->enableSearch) {
            $res['enableSearch'] = $this->enableSearch;
        }
        if (null !== $this->knowledgeBaseCodeList) {
            $res['knowledgeBaseCodeList'] = $this->knowledgeBaseCodeList;
        }
        if (null !== $this->topK) {
            $res['topK'] = $this->topK;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ragConfig
     */
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
                $model->knowledgeBaseCodeList = $map['knowledgeBaseCodeList'];
            }
        }
        if (isset($map['topK'])) {
            $model->topK = $map['topK'];
        }

        return $model;
    }
}
