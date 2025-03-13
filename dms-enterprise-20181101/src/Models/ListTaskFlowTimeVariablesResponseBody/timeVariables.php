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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowTimeVariablesResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowTimeVariablesResponseBody\timeVariables\timeVariable;
use AlibabaCloud\Tea\Model;

class timeVariables extends Model
{
    /**
     * @var timeVariable[]
     */
    public $timeVariable;
    protected $_name = [
        'timeVariable' => 'TimeVariable',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeVariable) {
            $res['TimeVariable'] = [];
            if (null !== $this->timeVariable && \is_array($this->timeVariable)) {
                $n = 0;
                foreach ($this->timeVariable as $item) {
                    $res['TimeVariable'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timeVariables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TimeVariable'])) {
            if (!empty($map['TimeVariable'])) {
                $model->timeVariable = [];
                $n = 0;
                foreach ($map['TimeVariable'] as $item) {
                    $model->timeVariable[$n++] = null !== $item ? timeVariable::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
