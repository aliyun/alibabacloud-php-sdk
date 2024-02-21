<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class CreateQueryOptimizeTagRequest extends Model
{
    /**
     * @description The remarks.
     *
     * The remarks can be 1 to 300 characters in length.
     * @example Slow SQL queries of offline synchronization. No optimization is required.
     *
     * @var string
     */
    public $comments;

    /**
     * @description The database engine. Valid values:
     *
     *   **MySQL**: ApsaraDB RDS for MySQL
     *   **PolarDBMySQL**: PolarDB for MySQL
     *   **PostgreSQL**: ApsaraDB RDS for PostgreSQL
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The instance ID.
     *
     * @example rm-2ze1jdv45i7l6****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The SQL template IDs. You can call the [GetQueryOptimizeExecErrorStats](~~405261~~) operation to obtain the SQL template ID. Separate multiple SQL template IDs with commas (,).
     *
     * @example 6068ce044e3dc9b903979672fb0b69df,d12515c015fc9f41a0778a9e1de0e941
     *
     * @var string
     */
    public $sqlIds;

    /**
     * @description The status of **Tags**. Valid values:
     *
     *   **0**: removes all tags added to the SQL templates that are specified by **SqlIds** and leaves **Tags** empty.
     *   **1**: adds the tags specified by **Tags** to the SQL templates that are specified by **SqlIds**.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The SQL tags. Separate multiple SQL tags with commas (,). Valid values:
     *
     *   **DAS_IMPORTANT**: The SQL template is important.
     *   **DAS_NOT_IMPORTANT**: The SQL template is unimportant.
     *   **USER_IGNORE**: The scheduling of the SQL template does not need to be optimized.
     *   **DAS_IN_PLAN**: The scheduling of the SQL template needs to be optimized.
     *
     * @example DAS_IN_PLAN,DAS_NOT_IMPORTANT
     *
     * @var string
     */
    public $tags;
    protected $_name = [
        'comments'   => 'Comments',
        'engine'     => 'Engine',
        'instanceId' => 'InstanceId',
        'sqlIds'     => 'SqlIds',
        'status'     => 'Status',
        'tags'       => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->sqlIds) {
            $res['SqlIds'] = $this->sqlIds;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateQueryOptimizeTagRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SqlIds'])) {
            $model->sqlIds = $map['SqlIds'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
