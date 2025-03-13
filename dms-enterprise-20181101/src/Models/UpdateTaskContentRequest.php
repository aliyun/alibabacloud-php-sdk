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

class UpdateTaskContentRequest extends Model
{
    /**
     * @description The node configurations after modification.
     *
     * @example { "dbId":12****, "sql":"select * from test_table",   "dbType":"lindorm_sql"  }
     *
     * @var string
     */
    public $nodeContent;

    /**
     * @description The ID of the task node. You can call the [GetTaskInstanceRelation](https://help.aliyun.com/document_detail/424711.html) operation to query the node ID.
     *
     * This parameter is required.
     *
     * @example 43****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The ID of the tenant.
     *
     * > To view the ID of the tenant, move the pointer over the profile picture in the upper-right corner of the Data Management (DMS) console. For more information, see the ["View information about the current tenant"](https://help.aliyun.com/document_detail/181330.html) section of the Manage DMS tenants topic.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'nodeContent' => 'NodeContent',
        'nodeId' => 'NodeId',
        'tid' => 'Tid',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeContent) {
            $res['NodeContent'] = $this->nodeContent;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTaskContentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeContent'])) {
            $model->nodeContent = $map['NodeContent'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
