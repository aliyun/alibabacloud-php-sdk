<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListAlertsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 报警ID
     *
     * @var int
     */
    public $alertId;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 关联服务名称
     *
     * @var string
     */
    public $relatedServiceName;

    /**
     * @description 告警优先级  1，2，3，4  对应 p1,p2,p3,p4
     *
     * @var string
     */
    public $alertLevel;

    /**
     * @description 报警标题
     *
     * @var string
     */
    public $title;

    /**
     * @description 收敛量
     *
     * @var int
     */
    public $sourceEventCount;
    protected $_name = [
        'alertId'            => 'alertId',
        'createTime'         => 'createTime',
        'relatedServiceName' => 'relatedServiceName',
        'alertLevel'         => 'alertLevel',
        'title'              => 'title',
        'sourceEventCount'   => 'sourceEventCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertId) {
            $res['alertId'] = $this->alertId;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->relatedServiceName) {
            $res['relatedServiceName'] = $this->relatedServiceName;
        }
        if (null !== $this->alertLevel) {
            $res['alertLevel'] = $this->alertLevel;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->sourceEventCount) {
            $res['sourceEventCount'] = $this->sourceEventCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alertId'])) {
            $model->alertId = $map['alertId'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['relatedServiceName'])) {
            $model->relatedServiceName = $map['relatedServiceName'];
        }
        if (isset($map['alertLevel'])) {
            $model->alertLevel = $map['alertLevel'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['sourceEventCount'])) {
            $model->sourceEventCount = $map['sourceEventCount'];
        }

        return $model;
    }
}
