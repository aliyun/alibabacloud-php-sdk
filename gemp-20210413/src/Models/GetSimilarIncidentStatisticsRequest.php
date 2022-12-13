<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class GetSimilarIncidentStatisticsRequest extends Model
{
    /**
     * @example 7C56D225-7C34-40BB-9624-C8BA449260E6
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 2021-09-09 09:09:09
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string[]
     */
    public $events;

    /**
     * @example 32
     *
     * @var int
     */
    public $incidentId;

    /**
     * @example xxx事件
     *
     * @var string
     */
    public $incidentTitle;

    /**
     * @example 23
     *
     * @var int
     */
    public $relatedServiceId;
    protected $_name = [
        'clientToken'      => 'clientToken',
        'createTime'       => 'createTime',
        'events'           => 'events',
        'incidentId'       => 'incidentId',
        'incidentTitle'    => 'incidentTitle',
        'relatedServiceId' => 'relatedServiceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->events) {
            $res['events'] = $this->events;
        }
        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }
        if (null !== $this->incidentTitle) {
            $res['incidentTitle'] = $this->incidentTitle;
        }
        if (null !== $this->relatedServiceId) {
            $res['relatedServiceId'] = $this->relatedServiceId;
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
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['events'])) {
            if (!empty($map['events'])) {
                $model->events = $map['events'];
            }
        }
        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }
        if (isset($map['incidentTitle'])) {
            $model->incidentTitle = $map['incidentTitle'];
        }
        if (isset($map['relatedServiceId'])) {
            $model->relatedServiceId = $map['relatedServiceId'];
        }

        return $model;
    }
}
