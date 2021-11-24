<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\UpdateAppTemplateConfigResponseBody;

use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateAppTemplateConfigResponseBody\result\configLogs;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 配置日志列表
     *
     * @var configLogs[]
     */
    public $configLogs;
    protected $_name = [
        'configLogs' => 'ConfigLogs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configLogs) {
            $res['ConfigLogs'] = [];
            if (null !== $this->configLogs && \is_array($this->configLogs)) {
                $n = 0;
                foreach ($this->configLogs as $item) {
                    $res['ConfigLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigLogs'])) {
            if (!empty($map['ConfigLogs'])) {
                $model->configLogs = [];
                $n                 = 0;
                foreach ($map['ConfigLogs'] as $item) {
                    $model->configLogs[$n++] = null !== $item ? configLogs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
