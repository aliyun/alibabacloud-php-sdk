<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataSourceWithConfigResponseBody\pageResult;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataSourceWithConfigResponseBody\pageResult\dataSourceList\devDataSourceInfo;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataSourceWithConfigResponseBody\pageResult\dataSourceList\prodDataSourceInfo;
use AlibabaCloud\Tea\Model;

class dataSourceList extends Model
{
    /**
     * @description 开发环境数据源信息
     *
     * @var devDataSourceInfo
     */
    public $devDataSourceInfo;

    /**
     * @description 生产环境数据源
     *
     * @var prodDataSourceInfo
     */
    public $prodDataSourceInfo;
    protected $_name = [
        'devDataSourceInfo' => 'DevDataSourceInfo',
        'prodDataSourceInfo' => 'ProdDataSourceInfo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->devDataSourceInfo) {
            $res['DevDataSourceInfo'] = null !== $this->devDataSourceInfo ? $this->devDataSourceInfo->toMap() : null;
        }
        if (null !== $this->prodDataSourceInfo) {
            $res['ProdDataSourceInfo'] = null !== $this->prodDataSourceInfo ? $this->prodDataSourceInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSourceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DevDataSourceInfo'])) {
            $model->devDataSourceInfo = devDataSourceInfo::fromMap($map['DevDataSourceInfo']);
        }
        if (isset($map['ProdDataSourceInfo'])) {
            $model->prodDataSourceInfo = prodDataSourceInfo::fromMap($map['ProdDataSourceInfo']);
        }

        return $model;
    }
}
