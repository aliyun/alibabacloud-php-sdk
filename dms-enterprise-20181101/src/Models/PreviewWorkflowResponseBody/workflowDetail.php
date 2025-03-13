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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\PreviewWorkflowResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\PreviewWorkflowResponseBody\workflowDetail\workflowNodeList;
use AlibabaCloud\Tea\Model;

class workflowDetail extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $wfCateName;

    /**
     * @var workflowNodeList
     */
    public $workflowNodeList;
    protected $_name = [
        'comment' => 'Comment',
        'wfCateName' => 'WfCateName',
        'workflowNodeList' => 'WorkflowNodeList',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->wfCateName) {
            $res['WfCateName'] = $this->wfCateName;
        }
        if (null !== $this->workflowNodeList) {
            $res['WorkflowNodeList'] = null !== $this->workflowNodeList ? $this->workflowNodeList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workflowDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['WfCateName'])) {
            $model->wfCateName = $map['WfCateName'];
        }
        if (isset($map['WorkflowNodeList'])) {
            $model->workflowNodeList = workflowNodeList::fromMap($map['WorkflowNodeList']);
        }

        return $model;
    }
}
