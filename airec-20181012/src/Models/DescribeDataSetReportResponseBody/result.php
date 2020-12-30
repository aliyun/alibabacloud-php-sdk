<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\DescribeDataSetReportResponseBody;

use AlibabaCloud\SDK\Airec\V20181012\Models\DescribeDataSetReportResponseBody\result\detail;
use AlibabaCloud\SDK\Airec\V20181012\Models\DescribeDataSetReportResponseBody\result\overall;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var overall
     */
    public $overall;

    /**
     * @var detail[]
     */
    public $detail;
    protected $_name = [
        'overall' => 'Overall',
        'detail'  => 'Detail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->overall) {
            $res['Overall'] = null !== $this->overall ? $this->overall->toMap() : null;
        }
        if (null !== $this->detail) {
            $res['Detail'] = [];
            if (null !== $this->detail && \is_array($this->detail)) {
                $n = 0;
                foreach ($this->detail as $item) {
                    $res['Detail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Overall'])) {
            $model->overall = overall::fromMap($map['Overall']);
        }
        if (isset($map['Detail'])) {
            if (!empty($map['Detail'])) {
                $model->detail = [];
                $n             = 0;
                foreach ($map['Detail'] as $item) {
                    $model->detail[$n++] = null !== $item ? detail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
