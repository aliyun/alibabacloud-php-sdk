<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeAppDailyDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class appDailyDetails extends Model
{
    /**
     * @var int
     */
    public $iosActiveCount;

    /**
     * @var int
     */
    public $index;

    /**
     * @var int
     */
    public $androidCount;

    /**
     * @var int
     */
    public $iosCount;

    /**
     * @var int
     */
    public $newCount;

    /**
     * @var int
     */
    public $ipActiveCount;

    /**
     * @var int
     */
    public $activeCount;

    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $androidActiveCount;
    protected $_name = [
        'iosActiveCount'     => 'IosActiveCount',
        'index'              => 'Index',
        'androidCount'       => 'AndroidCount',
        'iosCount'           => 'IosCount',
        'newCount'           => 'NewCount',
        'ipActiveCount'      => 'IpActiveCount',
        'activeCount'        => 'ActiveCount',
        'count'              => 'Count',
        'androidActiveCount' => 'AndroidActiveCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iosActiveCount) {
            $res['IosActiveCount'] = $this->iosActiveCount;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->androidCount) {
            $res['AndroidCount'] = $this->androidCount;
        }
        if (null !== $this->iosCount) {
            $res['IosCount'] = $this->iosCount;
        }
        if (null !== $this->newCount) {
            $res['NewCount'] = $this->newCount;
        }
        if (null !== $this->ipActiveCount) {
            $res['IpActiveCount'] = $this->ipActiveCount;
        }
        if (null !== $this->activeCount) {
            $res['ActiveCount'] = $this->activeCount;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->androidActiveCount) {
            $res['AndroidActiveCount'] = $this->androidActiveCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appDailyDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IosActiveCount'])) {
            $model->iosActiveCount = $map['IosActiveCount'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['AndroidCount'])) {
            $model->androidCount = $map['AndroidCount'];
        }
        if (isset($map['IosCount'])) {
            $model->iosCount = $map['IosCount'];
        }
        if (isset($map['NewCount'])) {
            $model->newCount = $map['NewCount'];
        }
        if (isset($map['IpActiveCount'])) {
            $model->ipActiveCount = $map['IpActiveCount'];
        }
        if (isset($map['ActiveCount'])) {
            $model->activeCount = $map['ActiveCount'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['AndroidActiveCount'])) {
            $model->androidActiveCount = $map['AndroidActiveCount'];
        }

        return $model;
    }
}
