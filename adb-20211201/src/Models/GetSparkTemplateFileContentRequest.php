<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class GetSparkTemplateFileContentRequest extends Model
{
    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @example amv-8vbn8pq537k8w****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The ID of the application template.
     *
     * >  You can call the [GetSparkTemplateFullTree](~~456205~~) operation to query the template ID.
     * @example 725204
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
     * @return GetSparkTemplateFileContentRequest
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
