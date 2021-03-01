<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListConfigCentersResponseBody\configCentersList;
use AlibabaCloud\Tea\Model;

class ListConfigCentersResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var configCentersList
     */
    public $configCentersList;

    /**
     * @var int
     */
    public $code;
    protected $_name = [
        'message'           => 'Message',
        'requestId'         => 'RequestId',
        'configCentersList' => 'ConfigCentersList',
        'code'              => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->configCentersList) {
            $res['ConfigCentersList'] = null !== $this->configCentersList ? $this->configCentersList->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConfigCentersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ConfigCentersList'])) {
            $model->configCentersList = configCentersList::fromMap($map['ConfigCentersList']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
