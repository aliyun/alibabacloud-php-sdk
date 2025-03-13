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

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Tea\Model;

class InvokePluginRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $params;

    /**
     * @example 3mj87da7zr
     *
     * @var string
     */
    public $pluginId;
    protected $_name = [
        'params' => 'params',
        'pluginId' => 'pluginId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->params) {
            $res['params'] = $this->params;
        }
        if (null !== $this->pluginId) {
            $res['pluginId'] = $this->pluginId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InvokePluginRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['params'])) {
            $model->params = $map['params'];
        }
        if (isset($map['pluginId'])) {
            $model->pluginId = $map['pluginId'];
        }

        return $model;
    }
}
