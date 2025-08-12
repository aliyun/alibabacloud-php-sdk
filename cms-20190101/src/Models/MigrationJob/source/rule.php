<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\source;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\source\rule\keywordFilter;
use AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\source\rule\primaryFilters;

class rule extends Model
{
    /**
     * @var keywordFilter
     */
    public $keywordFilter;

    /**
     * @var string
     */
    public $name;

    /**
     * @var primaryFilters[]
     */
    public $primaryFilters;
    protected $_name = [
        'keywordFilter' => 'KeywordFilter',
        'name' => 'Name',
        'primaryFilters' => 'PrimaryFilters',
    ];

    public function validate()
    {
        if (null !== $this->keywordFilter) {
            $this->keywordFilter->validate();
        }
        if (\is_array($this->primaryFilters)) {
            Model::validateArray($this->primaryFilters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keywordFilter) {
            $res['KeywordFilter'] = null !== $this->keywordFilter ? $this->keywordFilter->toArray($noStream) : $this->keywordFilter;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->primaryFilters) {
            if (\is_array($this->primaryFilters)) {
                $res['PrimaryFilters'] = [];
                $n1 = 0;
                foreach ($this->primaryFilters as $item1) {
                    $res['PrimaryFilters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['KeywordFilter'])) {
            $model->keywordFilter = keywordFilter::fromMap($map['KeywordFilter']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PrimaryFilters'])) {
            if (!empty($map['PrimaryFilters'])) {
                $model->primaryFilters = [];
                $n1 = 0;
                foreach ($map['PrimaryFilters'] as $item1) {
                    $model->primaryFilters[$n1] = primaryFilters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
