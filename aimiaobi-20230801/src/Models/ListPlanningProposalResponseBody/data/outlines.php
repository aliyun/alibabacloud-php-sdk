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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListPlanningProposalResponseBody\data;

use AlibabaCloud\Tea\Model;

class outlines extends Model
{
    /**
     * @example 大纲
     *
     * @var string
     */
    public $outline;

    /**
     * @example 大纲摘要
     *
     * @var string
     */
    public $summary;
    protected $_name = [
        'outline' => 'Outline',
        'summary' => 'Summary',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->outline) {
            $res['Outline'] = $this->outline;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outlines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Outline'])) {
            $model->outline = $map['Outline'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        return $model;
    }
}
