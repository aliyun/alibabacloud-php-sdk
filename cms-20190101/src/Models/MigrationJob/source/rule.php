<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\source;

use AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\source\rule\keywordFilter;
use AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\source\rule\primaryFilters;
use AlibabaCloud\Tea\Model;

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
        'keywordFilter'  => 'KeywordFilter',
        'name'           => 'Name',
        'primaryFilters' => 'PrimaryFilters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keywordFilter) {
            $res['KeywordFilter'] = null !== $this->keywordFilter ? $this->keywordFilter->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->primaryFilters) {
            $res['PrimaryFilters'] = [];
            if (null !== $this->primaryFilters && \is_array($this->primaryFilters)) {
                $n = 0;
                foreach ($this->primaryFilters as $item) {
                    $res['PrimaryFilters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rule
     */
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
                $n                     = 0;
                foreach ($map['PrimaryFilters'] as $item) {
                    $model->primaryFilters[$n++] = null !== $item ? primaryFilters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
