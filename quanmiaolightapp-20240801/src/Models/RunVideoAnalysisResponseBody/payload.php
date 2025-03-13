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

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody\payload\output;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody\payload\usage;
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
        'output' => 'output',
        'usage' => 'usage',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->output) {
            $res['output'] = null !== $this->output ? $this->output->toMap() : null;
        }
        if (null !== $this->usage) {
            $res['usage'] = null !== $this->usage ? $this->usage->toMap() : null;
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
        if (isset($map['output'])) {
            $model->output = output::fromMap($map['output']);
        }
        if (isset($map['usage'])) {
            $model->usage = usage::fromMap($map['usage']);
        }

        return $model;
    }
}
