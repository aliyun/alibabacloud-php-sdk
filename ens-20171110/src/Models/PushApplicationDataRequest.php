<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class PushApplicationDataRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example e76f8985-7965-41fc-925b-9648bb6bf650
     *
     * @var string
     */
    public $appId;

    /**
     * @description The data files that you want to push. The value must be a JSON string.
     *
     * @example [{\"name\":\"app01\",       \"version\":\"1.0\",       \"size\":100,\"archiveType\":\"tar.gz\",       \"md5\":\"\",       \"url\":\"http://xxxx\",\"timeout\": 1000   },    {       \"name\":\"app02\",       \"version\":\"1.1\",       \"size\":10,\"archiveType\":\"zip\",       \"md5\":\"xxxx\",       \"url\":\"http://xxxxxx\",\"timeout\": 1000   }]
     *
     * @var string
     */
    public $data;

    /**
     * @description The push policy in the canary release environment. The value must be a JSON string. You can specify multiple push policies. By default, all data files are pushed.
     *
     * @example {\"name\": \"ScheduleToRegionId\",  \"parameters\":{      \"operator\": \"In\",       \"values\": [\"cn-chegndu-telecom-4\", \"cn-shanghai-cmcc-4\"]  }}
     *
     * @var string
     */
    public $pushStrategy;

    /**
     * @description This parameter does not take effect.
     *
     * @example 1800
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'appId'        => 'AppId',
        'data'         => 'Data',
        'pushStrategy' => 'PushStrategy',
        'timeout'      => 'Timeout',
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
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->pushStrategy) {
            $res['PushStrategy'] = $this->pushStrategy;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushApplicationDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['PushStrategy'])) {
            $model->pushStrategy = $map['PushStrategy'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
