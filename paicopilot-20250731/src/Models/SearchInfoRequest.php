<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAICopilot\V20250731\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAICopilot\V20250731\Models\SearchInfoRequest\knowledgeBaseFilters;
use AlibabaCloud\SDK\PAICopilot\V20250731\Models\SearchInfoRequest\webFilters;

class SearchInfoRequest extends Model
{
    /**
     * @var knowledgeBaseFilters[]
     */
    public $knowledgeBaseFilters;

    /**
     * @var webFilters[]
     */
    public $webFilters;
    protected $_name = [
        'knowledgeBaseFilters' => 'KnowledgeBaseFilters',
        'webFilters' => 'WebFilters',
    ];

    public function validate()
    {
        if (\is_array($this->knowledgeBaseFilters)) {
            Model::validateArray($this->knowledgeBaseFilters);
        }
        if (\is_array($this->webFilters)) {
            Model::validateArray($this->webFilters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->knowledgeBaseFilters) {
            if (\is_array($this->knowledgeBaseFilters)) {
                $res['KnowledgeBaseFilters'] = [];
                $n1 = 0;
                foreach ($this->knowledgeBaseFilters as $item1) {
                    $res['KnowledgeBaseFilters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->webFilters) {
            if (\is_array($this->webFilters)) {
                $res['WebFilters'] = [];
                $n1 = 0;
                foreach ($this->webFilters as $item1) {
                    $res['WebFilters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['KnowledgeBaseFilters'])) {
            if (!empty($map['KnowledgeBaseFilters'])) {
                $model->knowledgeBaseFilters = [];
                $n1 = 0;
                foreach ($map['KnowledgeBaseFilters'] as $item1) {
                    $model->knowledgeBaseFilters[$n1] = knowledgeBaseFilters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['WebFilters'])) {
            if (!empty($map['WebFilters'])) {
                $model->webFilters = [];
                $n1 = 0;
                foreach ($map['WebFilters'] as $item1) {
                    $model->webFilters[$n1] = webFilters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
