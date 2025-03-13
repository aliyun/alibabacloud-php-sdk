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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetApprovalDetailResponseBody\approvalDetail\workflowNodes\workflowNode;

use AlibabaCloud\Tea\Model;

class auditUserIdList extends Model
{
    /**
     * @var string[]
     */
    public $auditUserIds;
    protected $_name = [
        'auditUserIds' => 'AuditUserIds',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditUserIds) {
            $res['AuditUserIds'] = $this->auditUserIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return auditUserIdList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditUserIds'])) {
            if (!empty($map['AuditUserIds'])) {
                $model->auditUserIds = $map['AuditUserIds'];
            }
        }

        return $model;
    }
}
