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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationRequest;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationRequest\agentContext\bizContext;
use AlibabaCloud\Tea\Model;

class agentContext extends Model
{
    /**
     * @var bizContext
     */
    public $bizContext;
    protected $_name = [
        'bizContext' => 'BizContext',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizContext) {
            $res['BizContext'] = null !== $this->bizContext ? $this->bizContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return agentContext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizContext'])) {
            $model->bizContext = bizContext::fromMap($map['BizContext']);
        }

        return $model;
    }
}
