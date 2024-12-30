<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAbnormalPatternDetectionResponseBody;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAbnormalPatternDetectionResponseBody\detectionItems\results;
use AlibabaCloud\Tea\Model;

class detectionItems extends Model
{
    /**
     * @example Cost
     *
     * @var string
     */
    public $name;

    /**
     * @var results[]
     */
    public $results;
    protected $_name = [
        'name'    => 'Name',
        'results' => 'Results',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->results) {
            $res['Results'] = [];
            if (null !== $this->results && \is_array($this->results)) {
                $n = 0;
                foreach ($this->results as $item) {
                    $res['Results'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detectionItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Results'])) {
            if (!empty($map['Results'])) {
                $model->results = [];
                $n              = 0;
                foreach ($map['Results'] as $item) {
                    $model->results[$n++] = null !== $item ? results::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
