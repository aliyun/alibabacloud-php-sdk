<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyIndexPartitionRequest\indexInfos;
use AlibabaCloud\Tea\Model;

class ModifyIndexPartitionRequest extends Model
{
    /**
     * @description The name of the data source.
     *
     * @example test1
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @description The information about each index.
     *
     * @example pre_domain_1
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The name of the data center.
     *
     * @example 1633293829
     *
     * @var int
     */
    public $generation;

    /**
     * @description The number of shards of the index.
     *
     * @var indexInfos[]
     */
    public $indexInfos;
    protected $_name = [
        'dataSourceName' => 'dataSourceName',
        'domainName'     => 'domainName',
        'generation'     => 'generation',
        'indexInfos'     => 'indexInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceName) {
            $res['dataSourceName'] = $this->dataSourceName;
        }
        if (null !== $this->domainName) {
            $res['domainName'] = $this->domainName;
        }
        if (null !== $this->generation) {
            $res['generation'] = $this->generation;
        }
        if (null !== $this->indexInfos) {
            $res['indexInfos'] = [];
            if (null !== $this->indexInfos && \is_array($this->indexInfos)) {
                $n = 0;
                foreach ($this->indexInfos as $item) {
                    $res['indexInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyIndexPartitionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataSourceName'])) {
            $model->dataSourceName = $map['dataSourceName'];
        }
        if (isset($map['domainName'])) {
            $model->domainName = $map['domainName'];
        }
        if (isset($map['generation'])) {
            $model->generation = $map['generation'];
        }
        if (isset($map['indexInfos'])) {
            if (!empty($map['indexInfos'])) {
                $model->indexInfos = [];
                $n                 = 0;
                foreach ($map['indexInfos'] as $item) {
                    $model->indexInfos[$n++] = null !== $item ? indexInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
