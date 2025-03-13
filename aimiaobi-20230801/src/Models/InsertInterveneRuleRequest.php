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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\InsertInterveneRuleRequest\interveneRuleConfig;
use AlibabaCloud\Tea\Model;

class InsertInterveneRuleRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example xxxxx_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @var interveneRuleConfig
     */
    public $interveneRuleConfig;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'interveneRuleConfig' => 'InterveneRuleConfig',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->interveneRuleConfig) {
            $res['InterveneRuleConfig'] = null !== $this->interveneRuleConfig ? $this->interveneRuleConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertInterveneRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['InterveneRuleConfig'])) {
            $model->interveneRuleConfig = interveneRuleConfig::fromMap($map['InterveneRuleConfig']);
        }

        return $model;
    }
}
