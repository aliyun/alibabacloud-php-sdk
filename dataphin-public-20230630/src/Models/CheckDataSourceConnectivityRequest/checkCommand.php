<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CheckDataSourceConnectivityRequest;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CheckDataSourceConnectivityRequest\checkCommand\configItemList;
use AlibabaCloud\Tea\Model;

class checkCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var configItemList[]
     */
    public $configItemList;

    /**
     * @description This parameter is required.
     *
     * @example MAX_COMPUTE
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'configItemList' => 'ConfigItemList',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configItemList) {
            $res['ConfigItemList'] = [];
            if (null !== $this->configItemList && \is_array($this->configItemList)) {
                $n = 0;
                foreach ($this->configItemList as $item) {
                    $res['ConfigItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigItemList'])) {
            if (!empty($map['ConfigItemList'])) {
                $model->configItemList = [];
                $n = 0;
                foreach ($map['ConfigItemList'] as $item) {
                    $model->configItemList[$n++] = null !== $item ? configItemList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
