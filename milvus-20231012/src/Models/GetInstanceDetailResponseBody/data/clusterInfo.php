<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models\GetInstanceDetailResponseBody\data;

use AlibabaCloud\SDK\Milvus\V20231012\Models\GetInstanceDetailResponseBody\data\clusterInfo\milvusResourceInfoList;
use AlibabaCloud\Tea\Model;

class clusterInfo extends Model
{
    /**
     * @example 3000
     *
     * @var int
     */
    public $attuPort;

    /**
     * @example c-123xxx-.milvus.aliyuncs.com
     *
     * @var string
     */
    public $internetUrl;

    /**
     * @example c-123xxx-internal.milvus.aliyuncs.com
     *
     * @var string
     */
    public $intranetUrl;

    /**
     * @var milvusResourceInfoList[]
     */
    public $milvusResourceInfoList;

    /**
     * @example 125.15 GB
     *
     * @var string
     */
    public $ossStorageSize;

    /**
     * @example 1718604000000
     *
     * @var int
     */
    public $ossStorageTimestamp;

    /**
     * @example 19530
     *
     * @var int
     */
    public $proxyPort;

    /**
     * @example 24
     *
     * @var int
     */
    public $totalCuNum;

    /**
     * @example 500
     *
     * @var int
     */
    public $totalDiskSize;
    protected $_name = [
        'attuPort'               => 'AttuPort',
        'internetUrl'            => 'InternetUrl',
        'intranetUrl'            => 'IntranetUrl',
        'milvusResourceInfoList' => 'MilvusResourceInfoList',
        'ossStorageSize'         => 'OssStorageSize',
        'ossStorageTimestamp'    => 'OssStorageTimestamp',
        'proxyPort'              => 'ProxyPort',
        'totalCuNum'             => 'TotalCuNum',
        'totalDiskSize'          => 'TotalDiskSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attuPort) {
            $res['AttuPort'] = $this->attuPort;
        }
        if (null !== $this->internetUrl) {
            $res['InternetUrl'] = $this->internetUrl;
        }
        if (null !== $this->intranetUrl) {
            $res['IntranetUrl'] = $this->intranetUrl;
        }
        if (null !== $this->milvusResourceInfoList) {
            $res['MilvusResourceInfoList'] = [];
            if (null !== $this->milvusResourceInfoList && \is_array($this->milvusResourceInfoList)) {
                $n = 0;
                foreach ($this->milvusResourceInfoList as $item) {
                    $res['MilvusResourceInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ossStorageSize) {
            $res['OssStorageSize'] = $this->ossStorageSize;
        }
        if (null !== $this->ossStorageTimestamp) {
            $res['OssStorageTimestamp'] = $this->ossStorageTimestamp;
        }
        if (null !== $this->proxyPort) {
            $res['ProxyPort'] = $this->proxyPort;
        }
        if (null !== $this->totalCuNum) {
            $res['TotalCuNum'] = $this->totalCuNum;
        }
        if (null !== $this->totalDiskSize) {
            $res['TotalDiskSize'] = $this->totalDiskSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttuPort'])) {
            $model->attuPort = $map['AttuPort'];
        }
        if (isset($map['InternetUrl'])) {
            $model->internetUrl = $map['InternetUrl'];
        }
        if (isset($map['IntranetUrl'])) {
            $model->intranetUrl = $map['IntranetUrl'];
        }
        if (isset($map['MilvusResourceInfoList'])) {
            if (!empty($map['MilvusResourceInfoList'])) {
                $model->milvusResourceInfoList = [];
                $n                             = 0;
                foreach ($map['MilvusResourceInfoList'] as $item) {
                    $model->milvusResourceInfoList[$n++] = null !== $item ? milvusResourceInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OssStorageSize'])) {
            $model->ossStorageSize = $map['OssStorageSize'];
        }
        if (isset($map['OssStorageTimestamp'])) {
            $model->ossStorageTimestamp = $map['OssStorageTimestamp'];
        }
        if (isset($map['ProxyPort'])) {
            $model->proxyPort = $map['ProxyPort'];
        }
        if (isset($map['TotalCuNum'])) {
            $model->totalCuNum = $map['TotalCuNum'];
        }
        if (isset($map['TotalDiskSize'])) {
            $model->totalDiskSize = $map['TotalDiskSize'];
        }

        return $model;
    }
}
