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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserActiveTenantResponseBody;

use AlibabaCloud\Tea\Model;

class tenant extends Model
{
    /**
     * @description The status of the tenant. Valid values:
     *
     *   **ACTIVE**: The tenant is used to access DMS.
     *   **IN_ACTIVE**: The tenant is not used.
     *
     * @example ACTIVE
     *
     * @var string
     */
    public $status;

    /**
     * @description The name of the tenant.
     *
     * @example test_name
     *
     * @var string
     */
    public $tenantName;

    /**
     * @description The ID of the tenant.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'status' => 'Status',
        'tenantName' => 'TenantName',
        'tid' => 'Tid',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tenant
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
