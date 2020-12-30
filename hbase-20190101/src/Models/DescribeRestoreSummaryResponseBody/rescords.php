<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreSummaryResponseBody;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreSummaryResponseBody\rescords\rescord;
use AlibabaCloud\Tea\Model;

class rescords extends Model
{
    /**
     * @var rescord[]
     */
    public $rescord;
    protected $_name = [
        'rescord' => 'Rescord',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rescord) {
            $res['Rescord'] = [];
            if (null !== $this->rescord && \is_array($this->rescord)) {
                $n = 0;
                foreach ($this->rescord as $item) {
                    $res['Rescord'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rescords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Rescord'])) {
            if (!empty($map['Rescord'])) {
                $model->rescord = [];
                $n              = 0;
                foreach ($map['Rescord'] as $item) {
                    $model->rescord[$n++] = null !== $item ? rescord::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
