<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\QueryDISyncTaskConfigProcessResultResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The parameters that are obtained. The parameters are used as the request parameters of the [CreateDISyncTask](https://help.aliyun.com/document_detail/278725.html) or [UpdateDISyncTask](https://help.aliyun.com/document_detail/289109.html) operation to create or update a real-time synchronization node or a synchronization solution in Data Integration.
     *
     * @example fileId:[100] is invalid.
     *
     * @var string
     */
    public $message;

    /**
     * @description The reason why the parameters fail to be obtained. If the parameters are obtained, the value null is returned.
     *
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @example {"extend":{"mode":"migration_holo","resourceGroup":"280749","name":"h"},"type":"job","steps":[{"stepType":"mysql","parameter":{"connection":[{"datasourceType":"mysql","datasource":"mm","selectedTables":[{"schema":[{"tableInfos":[{"enable":true,"table":"m_v1","tableName":"m_v1"}]}],"dbName":"m"}]}]},"name":"reader","category":"reader"},{"stepType":"holo","parameter":{"datasource":"h","tableMappingRule":{"datasource":[{"tableRule":[{"srcTable":"m_v1","mergeIntoCycleType":"DEFAULT","hourDeltaEnable":false,"dstTable":"m.m_v1","dayDeltaEnable":false,"primaryKeyInfo":{"column":["id"],"type":"pk"},"dstCreateTableInfo":{"indexType":"m_v1","dataColumn":[{"columnSize":0,"name":"id","index":0,"comment":"","newDigit":0,"type":"int8","digit":0,"primaryKey":true}],"schemaName":"m","tableName":"m_v1"},"srcDbName":"m"],"srcDatasourceName":"mm"}],"totalTableMapping":1},"writeMode":"replay"},"name":"writer","category":"writer"}],"version":"2.0","order":{"hops":[{"from":"reader","to":"writer"}]}}
     *
     * @var string
     */
    public $taskContent;
    protected $_name = [
        'message'     => 'Message',
        'status'      => 'Status',
        'taskContent' => 'TaskContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskContent) {
            $res['TaskContent'] = $this->taskContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskContent'])) {
            $model->taskContent = $map['TaskContent'];
        }

        return $model;
    }
}
