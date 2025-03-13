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

use AlibabaCloud\Tea\Model;

class ListVersionsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 33a2658aaabf4c24b45d50e575125311_p_beebot_public
     *
     * @var string
     */
    public $agentKey;
    protected $_name = [
        'agentKey' => 'AgentKey',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVersionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        return $model;
    }
}
