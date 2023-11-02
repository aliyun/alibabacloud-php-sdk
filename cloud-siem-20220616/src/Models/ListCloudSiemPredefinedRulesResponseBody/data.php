<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListCloudSiemPredefinedRulesResponseBody;

use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListCloudSiemPredefinedRulesResponseBody\data\pageInfo;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListCloudSiemPredefinedRulesResponseBody\data\responseData;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var responseData[]
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
            $res['ResponseData'] = [];
            if (null !== $this->responseData && \is_array($this->responseData)) {
                $n = 0;
                foreach ($this->responseData as $item) {
                    $res['ResponseData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
            if (!empty($map['ResponseData'])) {
                $model->responseData = [];
                $n                   = 0;
                foreach ($map['ResponseData'] as $item) {
                    $model->responseData[$n++] = null !== $item ? responseData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
