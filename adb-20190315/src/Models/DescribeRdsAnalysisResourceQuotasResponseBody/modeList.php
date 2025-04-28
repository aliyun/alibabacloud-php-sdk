<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody\modeList\mode;

class modeList extends Model
{
    /**
     * @var mode[]
     */
    public $mode;
    protected $_name = [
        'mode' => 'Mode',
    ];

    public function validate()
    {
        if (\is_array($this->mode)) {
            Model::validateArray($this->mode);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mode) {
            if (\is_array($this->mode)) {
                $res['Mode'] = [];
                $n1 = 0;
                foreach ($this->mode as $item1) {
                    $res['Mode'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Mode'])) {
            if (!empty($map['Mode'])) {
                $model->mode = [];
                $n1 = 0;
                foreach ($map['Mode'] as $item1) {
                    $model->mode[$n1++] = mode::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
