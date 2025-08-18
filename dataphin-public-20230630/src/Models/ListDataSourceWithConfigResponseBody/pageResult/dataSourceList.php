<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataSourceWithConfigResponseBody\pageResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataSourceWithConfigResponseBody\pageResult\dataSourceList\devDataSourceInfo;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataSourceWithConfigResponseBody\pageResult\dataSourceList\prodDataSourceInfo;

class dataSourceList extends Model
{
    /**
     * @var devDataSourceInfo
     */
    public $devDataSourceInfo;

    /**
     * @var prodDataSourceInfo
     */
    public $prodDataSourceInfo;
    protected $_name = [
        'devDataSourceInfo' => 'DevDataSourceInfo',
        'prodDataSourceInfo' => 'ProdDataSourceInfo',
    ];

    public function validate()
    {
        if (null !== $this->devDataSourceInfo) {
            $this->devDataSourceInfo->validate();
        }
        if (null !== $this->prodDataSourceInfo) {
            $this->prodDataSourceInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->devDataSourceInfo) {
            $res['DevDataSourceInfo'] = null !== $this->devDataSourceInfo ? $this->devDataSourceInfo->toArray($noStream) : $this->devDataSourceInfo;
        }

        if (null !== $this->prodDataSourceInfo) {
            $res['ProdDataSourceInfo'] = null !== $this->prodDataSourceInfo ? $this->prodDataSourceInfo->toArray($noStream) : $this->prodDataSourceInfo;
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
        if (isset($map['DevDataSourceInfo'])) {
            $model->devDataSourceInfo = devDataSourceInfo::fromMap($map['DevDataSourceInfo']);
        }

        if (isset($map['ProdDataSourceInfo'])) {
            $model->prodDataSourceInfo = prodDataSourceInfo::fromMap($map['ProdDataSourceInfo']);
        }

        return $model;
    }
}
