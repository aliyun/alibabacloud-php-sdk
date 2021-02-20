<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models\DescribeTaskBriefInfoResponseBody\brief;

use AlibabaCloud\Tea\Model;

class actionRunsFacet extends Model
{
    /**
     * @var int
     */
    public $completed;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'completed' => 'Completed',
        'total'     => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->completed) {
            $res['Completed'] = $this->completed;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return actionRunsFacet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Completed'])) {
            $model->completed = $map['Completed'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
