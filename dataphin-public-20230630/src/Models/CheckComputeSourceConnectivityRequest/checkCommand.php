<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CheckComputeSourceConnectivityRequest;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CheckComputeSourceConnectivityRequest\checkCommand\configList;
use AlibabaCloud\Tea\Model;

class checkCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var configList[]
     */
    public $configList;

    /**
     * @description This parameter is required.
     *
     * @example MAX_COMPUTE
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'configList' => 'ConfigList',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configList) {
            $res['ConfigList'] = [];
            if (null !== $this->configList && \is_array($this->configList)) {
                $n = 0;
                foreach ($this->configList as $item) {
                    $res['ConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['ConfigList'])) {
            if (!empty($map['ConfigList'])) {
                $model->configList = [];
                $n = 0;
                foreach ($map['ConfigList'] as $item) {
                    $model->configList[$n++] = null !== $item ? configList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
