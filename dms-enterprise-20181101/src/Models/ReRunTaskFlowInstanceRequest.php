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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ReRunTaskFlowInstanceRequest extends Model
{
    /**
     * @description The ID of the task flow. You can call the [ListTaskFlow](https://help.aliyun.com/document_detail/424565.html) or [ListLhTaskFlowAndScenario](https://help.aliyun.com/document_detail/426672.html) operation to query the task flow ID.
     *
     * This parameter is required.
     *
     * @example 7***
     *
     * @var int
     */
    public $dagId;

    /**
     * @description The ID of the execution record of the task flow. You can call the [ListTaskFlowInstance](https://help.aliyun.com/document_detail/424689.html) operation to query the execution record ID.
     *
     * This parameter is required.
     *
     * @example 47****
     *
     * @var int
     */
    public $dagInstanceId;

    /**
     * @description The version number of the task flow. You can call the ListTaskFlowVersions operation to query the version number of the task flow.
     *
     * @example 2****
     *
     * @var string
     */
    public $dagVersion;

    /**
     * @description The ID of the tenant.
     *
     * > To view the ID of the tenant, go to the Data Management (DMS) console and move the pointer over the profile picture in the upper-right corner. For more information, see [View information about the current tenant](https://help.aliyun.com/document_detail/181330.html).
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'dagId' => 'DagId',
        'dagInstanceId' => 'DagInstanceId',
        'dagVersion' => 'DagVersion',
        'tid' => 'Tid',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }
        if (null !== $this->dagInstanceId) {
            $res['DagInstanceId'] = $this->dagInstanceId;
        }
        if (null !== $this->dagVersion) {
            $res['DagVersion'] = $this->dagVersion;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReRunTaskFlowInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['DagInstanceId'])) {
            $model->dagInstanceId = $map['DagInstanceId'];
        }
        if (isset($map['DagVersion'])) {
            $model->dagVersion = $map['DagVersion'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
