<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QuerySessionReportDataResponseBody;

use AlibabaCloud\Dara\Model;

class reportDataModel extends Model
{
    /**
     * @var int
     */
    public $connectSessionCount;

    /**
     * @var int
     */
    public $sessionCount;

    /**
     * @var string
     */
    public $statDate;

    /**
     * @var int
     */
    public $streamingSessionCount;
    protected $_name = [
        'connectSessionCount' => 'ConnectSessionCount',
        'sessionCount' => 'SessionCount',
        'statDate' => 'StatDate',
        'streamingSessionCount' => 'StreamingSessionCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectSessionCount) {
            $res['ConnectSessionCount'] = $this->connectSessionCount;
        }

        if (null !== $this->sessionCount) {
            $res['SessionCount'] = $this->sessionCount;
        }

        if (null !== $this->statDate) {
            $res['StatDate'] = $this->statDate;
        }

        if (null !== $this->streamingSessionCount) {
            $res['StreamingSessionCount'] = $this->streamingSessionCount;
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
        if (isset($map['ConnectSessionCount'])) {
            $model->connectSessionCount = $map['ConnectSessionCount'];
        }

        if (isset($map['SessionCount'])) {
            $model->sessionCount = $map['SessionCount'];
        }

        if (isset($map['StatDate'])) {
            $model->statDate = $map['StatDate'];
        }

        if (isset($map['StreamingSessionCount'])) {
            $model->streamingSessionCount = $map['StreamingSessionCount'];
        }

        return $model;
    }
}
