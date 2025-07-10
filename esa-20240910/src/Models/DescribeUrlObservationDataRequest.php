<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class DescribeUrlObservationDataRequest extends Model
{
    /**
     * @var string
     */
    public $clientPlatform;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $metric;

    /**
     * @var string
     */
    public $siteId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'clientPlatform' => 'ClientPlatform',
        'endTime' => 'EndTime',
        'metric' => 'Metric',
        'siteId' => 'SiteId',
        'startTime' => 'StartTime',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientPlatform) {
            $res['ClientPlatform'] = $this->clientPlatform;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->metric) {
            $res['Metric'] = $this->metric;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientPlatform'])) {
            $model->clientPlatform = $map['ClientPlatform'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Metric'])) {
            $model->metric = $map['Metric'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
