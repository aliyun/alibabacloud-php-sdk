<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class DoQuickFieldRequest extends Model
{
    /**
     * @example 1684376244
     *
     * @var int
     */
    public $from;

    /**
     * @example alert_level
     *
     * @var string
     */
    public $index;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example true
     *
     * @var bool
     */
    public $reverse;

    /**
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @example 1684378090
     *
     * @var int
     */
    public $to;
    protected $_name = [
        'from'     => 'From',
        'index'    => 'Index',
        'page'     => 'Page',
        'regionId' => 'RegionId',
        'reverse'  => 'Reverse',
        'size'     => 'Size',
        'to'       => 'To',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->reverse) {
            $res['Reverse'] = $this->reverse;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DoQuickFieldRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Reverse'])) {
            $model->reverse = $map['Reverse'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
