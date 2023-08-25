<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class DeleteSparkTemplateFileRequest extends Model
{
    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @example amv-bp1y769u11748****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The ID of the template file to be deleted.
     *
     * >  You can call the [GetSparkTemplateFullTree](~~456205#doc-api-adb-GetSparkTemplateFullTree~~) operation to query the IDs of all existing template files.
     * @example 284
     *
     * @var int
     */
    public $id;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'id'          => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSparkTemplateFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
