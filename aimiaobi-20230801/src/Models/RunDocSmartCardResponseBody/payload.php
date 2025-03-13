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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocSmartCardResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocSmartCardResponseBody\payload\output;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocSmartCardResponseBody\payload\usage;
use AlibabaCloud\Tea\Model;

class payload extends Model
{
    /**
     * @var output
     */
    public $output;

    /**
     * @var usage
     */
    public $usage;
    protected $_name = [
        'output' => 'Output',
        'usage' => 'Usage',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->output) {
            $res['Output'] = null !== $this->output ? $this->output->toMap() : null;
        }
        if (null !== $this->usage) {
            $res['Usage'] = null !== $this->usage ? $this->usage->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return payload
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Output'])) {
            $model->output = output::fromMap($map['Output']);
        }
        if (isset($map['Usage'])) {
            $model->usage = usage::fromMap($map['Usage']);
        }

        return $model;
    }
}
