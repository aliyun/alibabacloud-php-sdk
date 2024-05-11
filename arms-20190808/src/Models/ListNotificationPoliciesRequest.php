<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListNotificationPoliciesRequest extends Model
{
    /**
     * @description Specifies whether to enable simple mode.
     *
     * @var bool
     */
    public $directedMode;

    /**
     * @description The ID of the notification policy.
     *
     * @example 12345
     *
     * @var string
     */
    public $ids;

    /**
     * @description Specifies whether to query the details about notification policies. Valid values:
     *
     *   `true`: Details about notification policies are queried.
     *   `false`: Details about notification policies are not queried.
     *
     * @example false
     *
     * @var bool
     */
    public $isDetail;

    /**
     * @description The name of the notification policy.
     *
     * @example notificationpolicy_test
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of the page to return.
     *
     * This parameter is required.
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
     * This parameter is required.
     * @example 20
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'directedMode' => 'DirectedMode',
        'ids'          => 'Ids',
        'isDetail'     => 'IsDetail',
        'name'         => 'Name',
        'page'         => 'Page',
        'regionId'     => 'RegionId',
        'size'         => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directedMode) {
            $res['DirectedMode'] = $this->directedMode;
        }
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }
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
     * @return ListNotificationPoliciesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectedMode'])) {
            $model->directedMode = $map['DirectedMode'];
        }
        if (isset($map['Ids'])) {
            $model->ids = $map['Ids'];
        }
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
