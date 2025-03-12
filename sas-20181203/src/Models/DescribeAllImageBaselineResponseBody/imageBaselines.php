<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllImageBaselineResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllImageBaselineResponseBody\imageBaselines\baselineClassList;
use AlibabaCloud\Tea\Model;

class imageBaselines extends Model
{
    /**
     * @description An array that consists of baseline types.
     *
     * @var baselineClassList[]
     */
    public $baselineClassList;
    protected $_name = [
        'baselineClassList' => 'BaselineClassList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineClassList) {
            $res['BaselineClassList'] = [];
            if (null !== $this->baselineClassList && \is_array($this->baselineClassList)) {
                $n = 0;
                foreach ($this->baselineClassList as $item) {
                    $res['BaselineClassList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageBaselines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineClassList'])) {
            if (!empty($map['BaselineClassList'])) {
                $model->baselineClassList = [];
                $n                        = 0;
                foreach ($map['BaselineClassList'] as $item) {
                    $model->baselineClassList[$n++] = null !== $item ? baselineClassList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
