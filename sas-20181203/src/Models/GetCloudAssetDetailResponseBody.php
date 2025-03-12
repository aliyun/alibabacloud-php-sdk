<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetCloudAssetDetailResponseBody\instances;
use AlibabaCloud\Tea\Model;

class GetCloudAssetDetailResponseBody extends Model
{
    /**
     * @description The number of instances in the list of cloud assets returned.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description An array that consists of the details of the cloud assets.
     *
     * @var instances[]
     */
    public $instances;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example CB45CAED-31C3-517A-8619-10F632D3****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'count'     => 'Count',
        'instances' => 'Instances',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->instances) {
            $res['Instances'] = [];
            if (null !== $this->instances && \is_array($this->instances)) {
                $n = 0;
                foreach ($this->instances as $item) {
                    $res['Instances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCloudAssetDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Instances'])) {
            if (!empty($map['Instances'])) {
                $model->instances = [];
                $n                = 0;
                foreach ($map['Instances'] as $item) {
                    $model->instances[$n++] = null !== $item ? instances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
