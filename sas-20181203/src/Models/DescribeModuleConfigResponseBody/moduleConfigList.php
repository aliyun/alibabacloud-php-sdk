<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeModuleConfigResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeModuleConfigResponseBody\moduleConfigList\items;
use AlibabaCloud\Tea\Model;

class moduleConfigList extends Model
{
    /**
     * @description The name of the configuration.
     *
     * @example timescan
     *
     * @var string
     */
    public $configName;

    /**
     * @description An array that consists of the configuration items.
     *
     * @var items[]
     */
    public $items;

    /**
     * @description The name of the module.
     *
     * @example alihids
     *
     * @var string
     */
    public $moduleName;
    protected $_name = [
        'configName' => 'ConfigName',
        'items'      => 'Items',
        'moduleName' => 'ModuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configName) {
            $res['ConfigName'] = $this->configName;
        }
        if (null !== $this->items) {
            $res['Items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['Items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moduleConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigName'])) {
            $model->configName = $map['ConfigName'];
        }
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['Items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }

        return $model;
    }
}
