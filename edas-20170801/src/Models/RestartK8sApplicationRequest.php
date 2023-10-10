<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class RestartK8sApplicationRequest extends Model
{
    /**
     * @description The ID of the application. You can call the ListApplication operation to query the application ID. For more information, see [ListApplication](~~149390~~).
     *
     * @example 93fdd228-********ed2ae98de18d
     *
     * @var string
     */
    public $appId;

    /**
     * @description The timeout period of the change process. Unit: seconds.
     *
     * @example 60
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'appId'   => 'AppId',
        'timeout' => 'Timeout',
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
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RestartK8sApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
