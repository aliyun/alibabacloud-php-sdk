<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCloudDriveServiceResponse\cloudDriveServices;
use AlibabaCloud\Tea\Model;

class DescribeCloudDriveServiceResponse extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var cloudDriveServices[]
     */
    public $cloudDriveServices;
    protected $_name = [
        'nextToken'          => 'NextToken',
        'requestId'          => 'RequestId',
        'cloudDriveServices' => 'CloudDriveServices',
    ];

    public function validate()
    {
        Model::validateRequired('nextToken', $this->nextToken, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('cloudDriveServices', $this->cloudDriveServices, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->cloudDriveServices) {
            $res['CloudDriveServices'] = [];
            if (null !== $this->cloudDriveServices && \is_array($this->cloudDriveServices)) {
                $n = 0;
                foreach ($this->cloudDriveServices as $item) {
                    $res['CloudDriveServices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudDriveServiceResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CloudDriveServices'])) {
            if (!empty($map['CloudDriveServices'])) {
                $model->cloudDriveServices = [];
                $n                         = 0;
                foreach ($map['CloudDriveServices'] as $item) {
                    $model->cloudDriveServices[$n++] = null !== $item ? cloudDriveServices::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
