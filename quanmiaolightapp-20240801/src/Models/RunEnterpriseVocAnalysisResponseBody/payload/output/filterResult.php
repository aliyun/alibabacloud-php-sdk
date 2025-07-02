<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunEnterpriseVocAnalysisResponseBody\payload\output;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunEnterpriseVocAnalysisResponseBody\payload\output\filterResult\filterResults;

class filterResult extends Model
{
    /**
     * @var filterResults[]
     */
    public $filterResults;
    protected $_name = [
        'filterResults' => 'filterResults',
    ];

    public function validate()
    {
        if (\is_array($this->filterResults)) {
            Model::validateArray($this->filterResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filterResults) {
            if (\is_array($this->filterResults)) {
                $res['filterResults'] = [];
                $n1 = 0;
                foreach ($this->filterResults as $item1) {
                    $res['filterResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['filterResults'])) {
            if (!empty($map['filterResults'])) {
                $model->filterResults = [];
                $n1 = 0;
                foreach ($map['filterResults'] as $item1) {
                    $model->filterResults[$n1] = filterResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
