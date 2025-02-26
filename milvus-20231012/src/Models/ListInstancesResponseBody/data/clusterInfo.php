<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models\ListInstancesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Milvus\V20231012\Models\ListInstancesResponseBody\data\clusterInfo\milvusResourceInfoList;

class clusterInfo extends Model
{
    /**
     * @var int
     */
    public $attuPort;
    /**
     * @var string
     */
    public $internetUrl;
    /**
     * @var string
     */
    public $intranetUrl;
    /**
     * @var milvusResourceInfoList[]
     */
    public $milvusResourceInfoList;
    /**
     * @var int
     */
    public $proxyPort;
    /**
     * @var int
     */
    public $totalCuNum;
    /**
     * @var int
     */
    public $totalDiskSize;
    protected $_name = [
        'attuPort'               => 'AttuPort',
        'internetUrl'            => 'InternetUrl',
        'intranetUrl'            => 'IntranetUrl',
        'milvusResourceInfoList' => 'MilvusResourceInfoList',
        'proxyPort'              => 'ProxyPort',
        'totalCuNum'             => 'TotalCuNum',
        'totalDiskSize'          => 'TotalDiskSize',
    ];

    public function validate()
    {
        if (\is_array($this->milvusResourceInfoList)) {
            Model::validateArray($this->milvusResourceInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->milvusResourceInfoList)) {
                $res['MilvusResourceInfoList'] = [];
                $n1                            = 0;
                foreach ($this->milvusResourceInfoList as $item1) {
                    $res['MilvusResourceInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1                            = 0;
                foreach ($map['MilvusResourceInfoList'] as $item1) {
                    $model->milvusResourceInfoList[$n1++] = milvusResourceInfoList::fromMap($item1);
                }
            }
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
