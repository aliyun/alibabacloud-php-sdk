<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListCloudAssetInstancesResponseBody\instances;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCloudAssetInstancesResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class ListCloudAssetInstancesResponseBody extends Model
{
    /**
     * @description The details of the cloud asset.
     *
     * @var instances[]
     */
    public $instances;

    /**
     * @description The page number of the returned page.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The pagination information.
     *
     * @example 028CF634-5268-5660-9575-48C9ED6BF880
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'instances' => 'Instances',
        'pageInfo'  => 'PageInfo',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instances) {
            $res['Instances'] = [];
            if (null !== $this->instances && \is_array($this->instances)) {
                $n = 0;
                foreach ($this->instances as $item) {
                    $res['Instances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCloudAssetInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Instances'])) {
            if (!empty($map['Instances'])) {
                $model->instances = [];
                $n                = 0;
                foreach ($map['Instances'] as $item) {
                    $model->instances[$n++] = null !== $item ? instances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
