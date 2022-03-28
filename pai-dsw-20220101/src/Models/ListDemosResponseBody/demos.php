<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\ListDemosResponseBody;

use AlibabaCloud\Tea\Model;

class demos extends Model
{
    /**
     * @description 所在目录
     *
     * @var string[]
     */
    public $categories;

    /**
     * @description 样例描述
     *
     * @var string
     */
    public $demoDescription;

    /**
     * @description 样例名称
     *
     * @var string
     */
    public $demoName;

    /**
     * @description 样例地址
     *
     * @var string
     */
    public $demoUrl;

    /**
     * @description 序号
     *
     * @var int
     */
    public $order;

    /**
     * @description 大小
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'categories'      => 'Categories',
        'demoDescription' => 'DemoDescription',
        'demoName'        => 'DemoName',
        'demoUrl'         => 'DemoUrl',
        'order'           => 'Order',
        'size'            => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categories) {
            $res['Categories'] = $this->categories;
        }
        if (null !== $this->demoDescription) {
            $res['DemoDescription'] = $this->demoDescription;
        }
        if (null !== $this->demoName) {
            $res['DemoName'] = $this->demoName;
        }
        if (null !== $this->demoUrl) {
            $res['DemoUrl'] = $this->demoUrl;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return demos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = $map['Categories'];
            }
        }
        if (isset($map['DemoDescription'])) {
            $model->demoDescription = $map['DemoDescription'];
        }
        if (isset($map['DemoName'])) {
            $model->demoName = $map['DemoName'];
        }
        if (isset($map['DemoUrl'])) {
            $model->demoUrl = $map['DemoUrl'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
