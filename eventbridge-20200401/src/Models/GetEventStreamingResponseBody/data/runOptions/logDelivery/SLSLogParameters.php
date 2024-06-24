<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\runOptions\logDelivery;

use AlibabaCloud\Tea\Model;

class SLSLogParameters extends Model
{
    /**
     * @var string
     */
    public $logstoreName;

    /**
     * @var string
     */
    public $projectName;
    protected $_name = [
        'logstoreName' => 'LogstoreName',
        'projectName'  => 'ProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logstoreName) {
            $res['LogstoreName'] = $this->logstoreName;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SLSLogParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogstoreName'])) {
            $model->logstoreName = $map['LogstoreName'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
