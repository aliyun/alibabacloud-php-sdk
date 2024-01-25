<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeStoreConfigResponseBody\storeConfigInfo;

use AlibabaCloud\Tea\Model;

class subscribeContents extends Model
{
    /**
     * @var bool
     */
    public $atAll;

    /**
     * @var string
     */
    public $atMobileList;

    /**
     * @var string
     */
    public $category;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $threshold;
    protected $_name = [
        'atAll'        => 'AtAll',
        'atMobileList' => 'AtMobileList',
        'category'     => 'Category',
        'enable'       => 'Enable',
        'threshold'    => 'Threshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->atAll) {
            $res['AtAll'] = $this->atAll;
        }
        if (null !== $this->atMobileList) {
            $res['AtMobileList'] = $this->atMobileList;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subscribeContents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AtAll'])) {
            $model->atAll = $map['AtAll'];
        }
        if (isset($map['AtMobileList'])) {
            $model->atMobileList = $map['AtMobileList'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
