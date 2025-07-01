<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLogAnalysisResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLogAnalysisResponseBody\analyses\analysis;

class analyses extends Model
{
    /**
     * @var analysis[]
     */
    public $analysis;
    protected $_name = [
        'analysis' => 'Analysis',
    ];

    public function validate()
    {
        if (\is_array($this->analysis)) {
            Model::validateArray($this->analysis);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysis) {
            if (\is_array($this->analysis)) {
                $res['Analysis'] = [];
                $n1 = 0;
                foreach ($this->analysis as $item1) {
                    $res['Analysis'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Analysis'])) {
            if (!empty($map['Analysis'])) {
                $model->analysis = [];
                $n1 = 0;
                foreach ($map['Analysis'] as $item1) {
                    $model->analysis[$n1] = analysis::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
