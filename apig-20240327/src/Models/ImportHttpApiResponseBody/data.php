<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ImportHttpApiResponseBody;

use AlibabaCloud\SDK\APIG\V20240327\Models\ImportHttpApiResponseBody\data\dryRunInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Pre-import check result.
     *
     * @var dryRunInfo
     */
    public $dryRunInfo;

    /**
     * @description HTTP API ID.
     *
     * @example api-xxx
     *
     * @var string
     */
    public $httpApiId;

    /**
     * @description API name.
     *
     * @example import-test
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'dryRunInfo' => 'dryRunInfo',
        'httpApiId' => 'httpApiId',
        'name' => 'name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dryRunInfo) {
            $res['dryRunInfo'] = null !== $this->dryRunInfo ? $this->dryRunInfo->toMap() : null;
        }
        if (null !== $this->httpApiId) {
            $res['httpApiId'] = $this->httpApiId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['dryRunInfo'])) {
            $model->dryRunInfo = dryRunInfo::fromMap($map['dryRunInfo']);
        }
        if (isset($map['httpApiId'])) {
            $model->httpApiId = $map['httpApiId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
