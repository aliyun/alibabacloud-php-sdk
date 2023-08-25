<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\StartSparkSQLEngineResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the Spark job.
     *
     * @example s202301xxxx
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the Spark application.
     *
     * @example SQLEngine1
     *
     * @var string
     */
    public $appName;

    /**
     * @description The state of the Spark SQL engine. Valid values:
     *
     *   SUBMITTED
     *   STARTING
     *   RUNNING
     *   FAILED
     *
     * @example SUBMITTED
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'appId'   => 'AppId',
        'appName' => 'AppName',
        'state'   => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
