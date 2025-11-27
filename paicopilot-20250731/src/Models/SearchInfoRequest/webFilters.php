<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAICopilot\V20250731\Models\SearchInfoRequest;

use AlibabaCloud\Dara\Model;

class webFilters extends Model
{
    /**
     * @var string[]
     */
    public $includeSites;

    /**
     * @var string
     */
    public $query;

    /**
     * @var int
     */
    public $resultLimit;

    /**
     * @var float
     */
    public $scoreThreshold;
    protected $_name = [
        'includeSites' => 'IncludeSites',
        'query' => 'Query',
        'resultLimit' => 'ResultLimit',
        'scoreThreshold' => 'ScoreThreshold',
    ];

    public function validate()
    {
        if (\is_array($this->includeSites)) {
            Model::validateArray($this->includeSites);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->includeSites) {
            if (\is_array($this->includeSites)) {
                $res['IncludeSites'] = [];
                $n1 = 0;
                foreach ($this->includeSites as $item1) {
                    $res['IncludeSites'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->resultLimit) {
            $res['ResultLimit'] = $this->resultLimit;
        }

        if (null !== $this->scoreThreshold) {
            $res['ScoreThreshold'] = $this->scoreThreshold;
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
        if (isset($map['IncludeSites'])) {
            if (!empty($map['IncludeSites'])) {
                $model->includeSites = [];
                $n1 = 0;
                foreach ($map['IncludeSites'] as $item1) {
                    $model->includeSites[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['ResultLimit'])) {
            $model->resultLimit = $map['ResultLimit'];
        }

        if (isset($map['ScoreThreshold'])) {
            $model->scoreThreshold = $map['ScoreThreshold'];
        }

        return $model;
    }
}
