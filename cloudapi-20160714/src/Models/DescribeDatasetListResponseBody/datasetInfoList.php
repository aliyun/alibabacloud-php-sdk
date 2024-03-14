<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDatasetListResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDatasetListResponseBody\datasetInfoList\tags;
use AlibabaCloud\Tea\Model;

class datasetInfoList extends Model
{
    /**
     * @description The time when the dataset was created. The time is displayed in UTC.
     *
     * @example 2022-09-21T12:58:43Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The dataset ID.
     *
     * @example 6304ce6b4ae6453f********
     *
     * @var string
     */
    public $datasetId;

    /**
     * @description The dataset name.
     *
     * @example DatasetName
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description The dataset type. Valid values:
     *
     *   JWT_BLOCKING : a JSON Web Token (JWT) blacklist
     *   IP_WHITELIST_CIDR : an IP address whitelist
     *   PARAMETER_ACCESS: a list of parameters for parameter-based access control
     *
     * @example IP_WHITELIST_CIDR
     *
     * @var string
     */
    public $datasetType;

    /**
     * @description The time when the dataset was last modified. The time is displayed in UTC.
     *
     * @example 2022-09-21T12:58:43Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The tags of the dataset.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'createdTime'  => 'CreatedTime',
        'datasetId'    => 'DatasetId',
        'datasetName'  => 'DatasetName',
        'datasetType'  => 'DatasetType',
        'modifiedTime' => 'ModifiedTime',
        'tags'         => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->datasetType) {
            $res['DatasetType'] = $this->datasetType;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return datasetInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['DatasetType'])) {
            $model->datasetType = $map['DatasetType'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
