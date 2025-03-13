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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowTemplatesResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowTemplatesResponseBody\workFlowTemplates\workFlowTemplate;
use AlibabaCloud\Tea\Model;

class workFlowTemplates extends Model
{
    /**
     * @var workFlowTemplate[]
     */
    public $workFlowTemplate;
    protected $_name = [
        'workFlowTemplate' => 'WorkFlowTemplate',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->workFlowTemplate) {
            $res['WorkFlowTemplate'] = [];
            if (null !== $this->workFlowTemplate && \is_array($this->workFlowTemplate)) {
                $n = 0;
                foreach ($this->workFlowTemplate as $item) {
                    $res['WorkFlowTemplate'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workFlowTemplates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WorkFlowTemplate'])) {
            if (!empty($map['WorkFlowTemplate'])) {
                $model->workFlowTemplate = [];
                $n = 0;
                foreach ($map['WorkFlowTemplate'] as $item) {
                    $model->workFlowTemplate[$n++] = null !== $item ? workFlowTemplate::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
