<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunEnterpriseVocAnalysisResponseBody\payload\output;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunEnterpriseVocAnalysisResponseBody\payload\output\filterResult\filterResults;
use AlibabaCloud\Tea\Model;

class filterResult extends Model
{
    /**
     * @var filterResults[]
     */
    public $filterResults;
    protected $_name = [
        'filterResults' => 'filterResults',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterResults) {
            $res['filterResults'] = [];
            if (null !== $this->filterResults && \is_array($this->filterResults)) {
                $n = 0;
                foreach ($this->filterResults as $item) {
                    $res['filterResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filterResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['filterResults'])) {
            if (!empty($map['filterResults'])) {
                $model->filterResults = [];
                $n = 0;
                foreach ($map['filterResults'] as $item) {
                    $model->filterResults[$n++] = null !== $item ? filterResults::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
