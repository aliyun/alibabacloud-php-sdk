<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\messages\searchResult;

class messages extends Model
{
    /**
     * @var bool
     */
    public $clarifications;

    /**
     * @var string
     */
    public $content;

    /**
     * @var bool
     */
    public $generateFinished;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $nodeCode;

    /**
     * @var string[]
     */
    public $searchQueries;

    /**
     * @var string
     */
    public $searchQuery;

    /**
     * @var searchResult[]
     */
    public $searchResult;
    protected $_name = [
        'clarifications' => 'Clarifications',
        'content' => 'Content',
        'generateFinished' => 'GenerateFinished',
        'id' => 'Id',
        'nodeCode' => 'NodeCode',
        'searchQueries' => 'SearchQueries',
        'searchQuery' => 'SearchQuery',
        'searchResult' => 'SearchResult',
    ];

    public function validate()
    {
        if (\is_array($this->searchQueries)) {
            Model::validateArray($this->searchQueries);
        }
        if (\is_array($this->searchResult)) {
            Model::validateArray($this->searchResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clarifications) {
            $res['Clarifications'] = $this->clarifications;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->generateFinished) {
            $res['GenerateFinished'] = $this->generateFinished;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->nodeCode) {
            $res['NodeCode'] = $this->nodeCode;
        }

        if (null !== $this->searchQueries) {
            if (\is_array($this->searchQueries)) {
                $res['SearchQueries'] = [];
                $n1 = 0;
                foreach ($this->searchQueries as $item1) {
                    $res['SearchQueries'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->searchQuery) {
            $res['SearchQuery'] = $this->searchQuery;
        }

        if (null !== $this->searchResult) {
            if (\is_array($this->searchResult)) {
                $res['SearchResult'] = [];
                $n1 = 0;
                foreach ($this->searchResult as $item1) {
                    $res['SearchResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Clarifications'])) {
            $model->clarifications = $map['Clarifications'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['GenerateFinished'])) {
            $model->generateFinished = $map['GenerateFinished'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['NodeCode'])) {
            $model->nodeCode = $map['NodeCode'];
        }

        if (isset($map['SearchQueries'])) {
            if (!empty($map['SearchQueries'])) {
                $model->searchQueries = [];
                $n1 = 0;
                foreach ($map['SearchQueries'] as $item1) {
                    $model->searchQueries[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SearchQuery'])) {
            $model->searchQuery = $map['SearchQuery'];
        }

        if (isset($map['SearchResult'])) {
            if (!empty($map['SearchResult'])) {
                $model->searchResult = [];
                $n1 = 0;
                foreach ($map['SearchResult'] as $item1) {
                    $model->searchResult[$n1] = searchResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
