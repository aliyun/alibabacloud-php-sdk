<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\GetLogsResponseBody;

use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\GetLogsResponseBody\data\pageInfo;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\GetLogsResponseBody\data\responseData;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The result on the current page.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The content of the log.
     *
     * @var responseData
     */
    public $responseData;
    protected $_name = [
        'pageInfo'     => 'PageInfo',
        'responseData' => 'ResponseData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->responseData) {
            $res['ResponseData'] = null !== $this->responseData ? $this->responseData->toMap() : null;
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
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['ResponseData'])) {
            $model->responseData = responseData::fromMap($map['ResponseData']);
        }

        return $model;
    }
}
