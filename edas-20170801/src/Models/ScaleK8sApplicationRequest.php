<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ScaleK8sApplicationRequest extends Model
{
    /**
     * @description The ID of the application. You can call the ListApplication operation to query the application ID. For more information, see [ListApplication](~~149390~~).
     *
     * @example 23bf94d9-****-4994-****-616a827aa777
     *
     * @var string
     */
    public $appId;

    /**
     * @description The expected number of application instances after the scale-out or scale-in. The minimum number is 0.
     *
     * @example 2
     *
     * @var int
     */
    public $replicas;

    /**
     * @description The timeout period of the change process. Unit: seconds.
     *
     * @example 60
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'appId'    => 'AppId',
        'replicas' => 'Replicas',
        'timeout'  => 'Timeout',
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
        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScaleK8sApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
