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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneRuleDetailResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneRuleDetailResponseBody\data\interveneRuleDetail;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var interveneRuleDetail
     */
    public $interveneRuleDetail;
    protected $_name = [
        'interveneRuleDetail' => 'InterveneRuleDetail',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->interveneRuleDetail) {
            $res['InterveneRuleDetail'] = null !== $this->interveneRuleDetail ? $this->interveneRuleDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InterveneRuleDetail'])) {
            $model->interveneRuleDetail = interveneRuleDetail::fromMap($map['InterveneRuleDetail']);
        }

        return $model;
    }
}
