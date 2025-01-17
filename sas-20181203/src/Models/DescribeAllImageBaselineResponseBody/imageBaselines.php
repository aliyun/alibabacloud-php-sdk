<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllImageBaselineResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllImageBaselineResponseBody\imageBaselines\baselineClassList;

class imageBaselines extends Model
{
    /**
     * @var baselineClassList[]
     */
    public $baselineClassList;
    protected $_name = [
        'baselineClassList' => 'BaselineClassList',
    ];

    public function validate()
    {
        if (\is_array($this->baselineClassList)) {
            Model::validateArray($this->baselineClassList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baselineClassList) {
            if (\is_array($this->baselineClassList)) {
                $res['BaselineClassList'] = [];
                $n1                       = 0;
                foreach ($this->baselineClassList as $item1) {
                    $res['BaselineClassList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BaselineClassList'])) {
            if (!empty($map['BaselineClassList'])) {
                $model->baselineClassList = [];
                $n1                       = 0;
                foreach ($map['BaselineClassList'] as $item1) {
                    $model->baselineClassList[$n1++] = baselineClassList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
