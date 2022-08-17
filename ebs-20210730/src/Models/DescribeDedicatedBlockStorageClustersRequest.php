<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class DescribeDedicatedBlockStorageClustersRequest extends Model
{
    /**
     * @var string
     */
    public $azoneId;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string[]
     */
    public $dedicatedBlockStorageClusterId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $status;
    protected $_name = [
        'azoneId'                        => 'AzoneId',
        'category'                       => 'Category',
        'clientToken'                    => 'ClientToken',
        'dedicatedBlockStorageClusterId' => 'DedicatedBlockStorageClusterId',
        'maxResults'                     => 'MaxResults',
        'nextToken'                      => 'NextToken',
        'regionId'                       => 'RegionId',
        'status'                         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->azoneId) {
            $res['AzoneId'] = $this->azoneId;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dedicatedBlockStorageClusterId) {
            $res['DedicatedBlockStorageClusterId'] = $this->dedicatedBlockStorageClusterId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDedicatedBlockStorageClustersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AzoneId'])) {
            $model->azoneId = $map['AzoneId'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DedicatedBlockStorageClusterId'])) {
            if (!empty($map['DedicatedBlockStorageClusterId'])) {
                $model->dedicatedBlockStorageClusterId = $map['DedicatedBlockStorageClusterId'];
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            if (!empty($map['Status'])) {
                $model->status = $map['Status'];
            }
        }

        return $model;
    }
}
