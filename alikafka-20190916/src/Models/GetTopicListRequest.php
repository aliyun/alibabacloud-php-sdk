<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class GetTopicListRequest extends Model
{
    /**
     * @description The page number of the page to return. Default value: 1.
     *
     * @example 1
     *
     * @var string
     */
    public $currentPage;

    /**
     * @description The ID of the instance.
     *
     * @example alikafka_pre-cn-0pp1954n****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of entries to return on each page. Default value: 10
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The region ID of the instance to which the topics that you want to query belong.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the topic that you want to query.
     *
     * @example topic_name
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'instanceId'  => 'InstanceId',
        'pageSize'    => 'PageSize',
        'regionId'    => 'RegionId',
        'topic'       => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTopicListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
