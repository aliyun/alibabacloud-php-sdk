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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowNodesResponseBody\workflowNodes\workflowNode;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowNodesResponseBody\workflowNodes\workflowNode\auditUsers\auditUser;
use AlibabaCloud\Tea\Model;

class auditUsers extends Model
{
    /**
     * @var auditUser[]
     */
    public $auditUser;
    protected $_name = [
        'auditUser' => 'AuditUser',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditUser) {
            $res['AuditUser'] = [];
            if (null !== $this->auditUser && \is_array($this->auditUser)) {
                $n = 0;
                foreach ($this->auditUser as $item) {
                    $res['AuditUser'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return auditUsers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditUser'])) {
            if (!empty($map['AuditUser'])) {
                $model->auditUser = [];
                $n = 0;
                foreach ($map['AuditUser'] as $item) {
                    $model->auditUser[$n++] = null !== $item ? auditUser::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
