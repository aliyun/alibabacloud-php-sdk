<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\DescribeComplianceResponse;

use AlibabaCloud\SDK\Config\V20190108\Models\DescribeComplianceResponse\complianceResult\compliances;
use AlibabaCloud\Tea\Model;

class complianceResult extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var compliances[]
     */
    public $compliances;
    protected $_name = [
        'totalCount'  => 'TotalCount',
        'compliances' => 'Compliances',
    ];

    public function validate()
    {
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('compliances', $this->compliances, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->compliances) {
            $res['Compliances'] = [];
            if (null !== $this->compliances && \is_array($this->compliances)) {
                $n = 0;
                foreach ($this->compliances as $item) {
                    $res['Compliances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return complianceResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Compliances'])) {
            if (!empty($map['Compliances'])) {
                $model->compliances = [];
                $n                  = 0;
                foreach ($map['Compliances'] as $item) {
                    $model->compliances[$n++] = null !== $item ? compliances::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
