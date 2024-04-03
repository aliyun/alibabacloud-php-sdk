<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListSilencePoliciesRequest extends Model
{
    /**
     * @description Specifies whether to query the details of a silence policy. Valid values:
     *
     *   `true`: Details of the silence policy are queried.
     *   `false`: Details about notification policies are not queried.
     *
     * @example true
     *
     * @var bool
     */
    public $isDetail;

    /**
     * @description The name of the silence policy.
     *
     * @example silencepolicy_test
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'isDetail' => 'IsDetail',
        'name'     => 'Name',
        'page'     => 'Page',
        'regionId' => 'RegionId',
        'size'     => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isDetail) {
            $res['IsDetail'] = $this->isDetail;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSilencePoliciesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsDetail'])) {
            $model->isDetail = $map['IsDetail'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
