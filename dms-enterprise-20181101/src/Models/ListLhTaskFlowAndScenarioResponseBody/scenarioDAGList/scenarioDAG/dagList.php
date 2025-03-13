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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponseBody\scenarioDAGList\scenarioDAG;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponseBody\scenarioDAGList\scenarioDAG\dagList\dag;
use AlibabaCloud\Tea\Model;

class dagList extends Model
{
    /**
     * @var dag[]
     */
    public $dag;
    protected $_name = [
        'dag' => 'Dag',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dag) {
            $res['Dag'] = [];
            if (null !== $this->dag && \is_array($this->dag)) {
                $n = 0;
                foreach ($this->dag as $item) {
                    $res['Dag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dagList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dag'])) {
            if (!empty($map['Dag'])) {
                $model->dag = [];
                $n = 0;
                foreach ($map['Dag'] as $item) {
                    $model->dag[$n++] = null !== $item ? dag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
