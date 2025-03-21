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

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RunChatResultGenerationRequest\tools;

use AlibabaCloud\SDK\DianJin\V20240628\Models\RunChatResultGenerationRequest\tools\function_\parameters;
use AlibabaCloud\Tea\Model;

class function_ extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example get_time
     *
     * @var string
     */
    public $name;

    /**
     * @var parameters
     */
    public $parameters;

    /**
     * @var string[]
     */
    public $required;
    protected $_name = [
        'description' => 'description',
        'name' => 'name',
        'parameters' => 'parameters',
        'required' => 'required',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->parameters) {
            $res['parameters'] = null !== $this->parameters ? $this->parameters->toMap() : null;
        }
        if (null !== $this->required) {
            $res['required'] = $this->required;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return function_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['parameters'])) {
            $model->parameters = parameters::fromMap($map['parameters']);
        }
        if (isset($map['required'])) {
            if (!empty($map['required'])) {
                $model->required = $map['required'];
            }
        }

        return $model;
    }
}
