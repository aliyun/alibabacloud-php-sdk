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

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GenerateOutputFormatResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $outputFormat;
    protected $_name = [
        'outputFormat' => 'outputFormat',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->outputFormat) {
            $res['outputFormat'] = $this->outputFormat;
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
        if (isset($map['outputFormat'])) {
            $model->outputFormat = $map['outputFormat'];
        }

        return $model;
    }
}
