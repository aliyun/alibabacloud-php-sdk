<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody;

use AlibabaCloud\Tea\Model;

class backendConfig extends Model
{
    /**
     * @description The ID of the backend service.
     *
     * @example a0305308908c4740aba9cbfd63ba99b7
     *
     * @var string
     */
    public $backendId;

    /**
     * @description The name of the backend service.
     *
     * @example zmapi
     *
     * @var string
     */
    public $backendName;

    /**
     * @description The type of the backend service.
     *
     * @example HTTP
     *
     * @var string
     */
    public $backendType;
    protected $_name = [
        'backendId'   => 'BackendId',
        'backendName' => 'BackendName',
        'backendType' => 'BackendType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendId) {
            $res['BackendId'] = $this->backendId;
        }
        if (null !== $this->backendName) {
            $res['BackendName'] = $this->backendName;
        }
        if (null !== $this->backendType) {
            $res['BackendType'] = $this->backendType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backendConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendId'])) {
            $model->backendId = $map['BackendId'];
        }
        if (isset($map['BackendName'])) {
            $model->backendName = $map['BackendName'];
        }
        if (isset($map['BackendType'])) {
            $model->backendType = $map['BackendType'];
        }

        return $model;
    }
}
