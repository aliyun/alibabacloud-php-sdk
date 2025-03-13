<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicTableRouteConfigResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicTableRouteConfigResponseBody\logicTableRouteConfigList\logicTableRouteConfig;
use AlibabaCloud\Tea\Model;

class logicTableRouteConfigList extends Model
{
    /**
     * @var logicTableRouteConfig[]
     */
    public $logicTableRouteConfig;
    protected $_name = [
        'logicTableRouteConfig' => 'LogicTableRouteConfig',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->logicTableRouteConfig) {
            $res['LogicTableRouteConfig'] = [];
            if (null !== $this->logicTableRouteConfig && \is_array($this->logicTableRouteConfig)) {
                $n = 0;
                foreach ($this->logicTableRouteConfig as $item) {
                    $res['LogicTableRouteConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logicTableRouteConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogicTableRouteConfig'])) {
            if (!empty($map['LogicTableRouteConfig'])) {
                $model->logicTableRouteConfig = [];
                $n = 0;
                foreach ($map['LogicTableRouteConfig'] as $item) {
                    $model->logicTableRouteConfig[$n++] = null !== $item ? logicTableRouteConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
