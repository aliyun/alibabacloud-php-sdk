<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceApiErrorImpactResponseBody\data;

use AlibabaCloud\Tea\Model;

class errorApiList extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $apiName;

    /**
     * @example 2012
     *
     * @var int
     */
    public $appId;

    /**
     * @example 100
     *
     * @var int
     */
    public $errorCount;
    protected $_name = [
        'apiName' => 'ApiName',
        'appId' => 'AppId',
        'errorCount' => 'ErrorCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->errorCount) {
            $res['ErrorCount'] = $this->errorCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorApiList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ErrorCount'])) {
            $model->errorCount = $map['ErrorCount'];
        }

        return $model;
    }
}
