<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeModuleConfigResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeModuleConfigResponseBody\moduleConfigList\items;
use AlibabaCloud\Tea\Model;

class moduleConfigList extends Model
{
    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var string
     */
    public $configName;

    /**
     * @var items[]
     */
    public $items;
    protected $_name = [
        'moduleName' => 'ModuleName',
        'configName' => 'ConfigName',
        'items'      => 'Items',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
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
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
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

        return $model;
    }
}
