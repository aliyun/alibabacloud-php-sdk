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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationRequest\agentContext;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationRequest\agentContext\bizContext\multimodalMediaSelection;
use AlibabaCloud\Tea\Model;

class bizContext extends Model
{
    /**
     * @var multimodalMediaSelection
     */
    public $multimodalMediaSelection;
    protected $_name = [
        'multimodalMediaSelection' => 'MultimodalMediaSelection',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->multimodalMediaSelection) {
            $res['MultimodalMediaSelection'] = null !== $this->multimodalMediaSelection ? $this->multimodalMediaSelection->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bizContext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MultimodalMediaSelection'])) {
            $model->multimodalMediaSelection = multimodalMediaSelection::fromMap($map['MultimodalMediaSelection']);
        }

        return $model;
    }
}
