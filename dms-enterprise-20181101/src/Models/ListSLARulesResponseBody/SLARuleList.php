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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSLARulesResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSLARulesResponseBody\SLARuleList\SLARule;
use AlibabaCloud\Tea\Model;

class SLARuleList extends Model
{
    /**
     * @var SLARule[]
     */
    public $SLARule;
    protected $_name = [
        'SLARule' => 'SLARule',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->SLARule) {
            $res['SLARule'] = [];
            if (null !== $this->SLARule && \is_array($this->SLARule)) {
                $n = 0;
                foreach ($this->SLARule as $item) {
                    $res['SLARule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SLARuleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SLARule'])) {
            if (!empty($map['SLARule'])) {
                $model->SLARule = [];
                $n = 0;
                foreach ($map['SLARule'] as $item) {
                    $model->SLARule[$n++] = null !== $item ? SLARule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
