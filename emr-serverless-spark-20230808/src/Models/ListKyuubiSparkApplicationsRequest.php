<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListKyuubiSparkApplicationsRequest\startTime;

class ListKyuubiSparkApplicationsRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var startTime
     */
    public $startTime;
    protected $_name = [
        'applicationId' => 'applicationId',
        'applicationName' => 'applicationName',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'startTime' => 'startTime',
    ];

    public function validate()
    {
        if (null !== $this->startTime) {
            $this->startTime->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['applicationId'] = $this->applicationId;
        }

        if (null !== $this->applicationName) {
            $res['applicationName'] = $this->applicationName;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = null !== $this->startTime ? $this->startTime->toArray($noStream) : $this->startTime;
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
        if (isset($map['applicationId'])) {
            $model->applicationId = $map['applicationId'];
        }

        if (isset($map['applicationName'])) {
            $model->applicationName = $map['applicationName'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = startTime::fromMap($map['startTime']);
        }

        return $model;
    }
}
