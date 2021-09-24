<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class GetSimilarIncidentStatisticsRequest extends Model
{
    /**
     * @description 事件id
     *
     * @var int
     */
    public $incidentId;

    /**
     * @description 事件标题
     *
     * @var string
     */
    public $incidentTitle;

    /**
     * @description 触发时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 关联服务id
     *
     * @var int
     */
    public $relatedServiceId;

    /**
     * @description 事件告警内容
     *
     * @var string[]
     */
    public $events;

    /**
     * @description 幂等标识
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'incidentId'       => 'incidentId',
        'incidentTitle'    => 'incidentTitle',
        'createTime'       => 'createTime',
        'relatedServiceId' => 'relatedServiceId',
        'events'           => 'events',
        'clientToken'      => 'clientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }
        if (null !== $this->incidentTitle) {
            $res['incidentTitle'] = $this->incidentTitle;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->relatedServiceId) {
            $res['relatedServiceId'] = $this->relatedServiceId;
        }
        if (null !== $this->events) {
            $res['events'] = $this->events;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSimilarIncidentStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }
        if (isset($map['incidentTitle'])) {
            $model->incidentTitle = $map['incidentTitle'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['relatedServiceId'])) {
            $model->relatedServiceId = $map['relatedServiceId'];
        }
        if (isset($map['events'])) {
            if (!empty($map['events'])) {
                $model->events = $map['events'];
            }
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
