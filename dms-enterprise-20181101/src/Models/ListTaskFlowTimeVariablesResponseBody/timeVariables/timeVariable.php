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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowTimeVariablesResponseBody\timeVariables;

use AlibabaCloud\Tea\Model;

class timeVariable extends Model
{
    /**
     * @description The name of the time variable.
     *
     * @example time_test
     *
     * @var string
     */
    public $name;

    /**
     * @description The format of the time variable.
     *
     * @example 2018-09-26|+7h
     *
     * @var string
     */
    public $pattern;
    protected $_name = [
        'name' => 'Name',
        'pattern' => 'Pattern',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pattern) {
            $res['Pattern'] = $this->pattern;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timeVariable
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Pattern'])) {
            $model->pattern = $map['Pattern'];
        }

        return $model;
    }
}
