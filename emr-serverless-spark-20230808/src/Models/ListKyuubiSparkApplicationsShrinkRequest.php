<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;

class ListKyuubiSparkApplicationsShrinkRequest extends Model
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
     * @var string
     */
    public $startTimeShrink;
    protected $_name = [
        'applicationId' => 'applicationId',
        'applicationName' => 'applicationName',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'startTimeShrink' => 'startTime',
    ];

    public function validate()
    {
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

        if (null !== $this->startTimeShrink) {
            $res['startTime'] = $this->startTimeShrink;
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
            $model->startTimeShrink = $map['startTime'];
        }

        return $model;
    }
}
