<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\GetOsDownloadPathResponseBody\osVersion;
use AlibabaCloud\Tea\Model;

class GetOsDownloadPathResponseBody extends Model
{
    /**
     * @var osVersion
     */
    public $osVersion;

    /**
     * @description Id of the request
     *
     * @example fdb2af01-bd56-4034-812b-f257f73b4690
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'osVersion' => 'OsVersion',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->osVersion) {
            $res['OsVersion'] = null !== $this->osVersion ? $this->osVersion->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOsDownloadPathResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OsVersion'])) {
            $model->osVersion = osVersion::fromMap($map['OsVersion']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
