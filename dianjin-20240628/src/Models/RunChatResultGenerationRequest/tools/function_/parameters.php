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

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RunChatResultGenerationRequest\tools\function_;

use AlibabaCloud\Tea\Model;

class parameters extends Model
{
    /**
     * @example {
     * "location": {
     * "type": "string",
     * "description": "The city and state, e.g. San Francisco, CA"
     * },
     * "unit": {
     * "type": "string",
     * "enum": [
     * "celsius",
     * "fahrenheit"
     * ]
     * }
     * }
     *
     * @var mixed[]
     */
    public $properties;

    /**
     * @example object
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'properties' => 'properties',
        'type' => 'type',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->properties) {
            $res['properties'] = $this->properties;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['properties'])) {
            $model->properties = $map['properties'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
