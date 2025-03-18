<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeleteApplicationRequest extends Model
{
    /**
     * @description The ID of the application. To obtain the application ID, call the ListApplication operation.
     *
     * This parameter is required.
     *
     * @example d0639abf-789a-4527-b420-031d2cd9ad9b
     *
     * @var string
     */
    public $appId;

    /**
     * @description The timeout period for the asynchronous release. Unit: seconds. Default value: 300.
     *
     * @example 1800
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'appId' => 'AppId',
        'timeout' => 'Timeout',
    ];

    public function validate() {}

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
     * @return DeleteApplicationRequest
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
