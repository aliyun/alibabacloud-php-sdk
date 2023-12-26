<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models;

use AlibabaCloud\Tea\Model;

class GetServiceDataImportStatusRequest extends Model
{
    /**
     * @var int[]
     */
    public $dataImportIds;
    protected $_name = [
        'dataImportIds' => 'DataImportIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataImportIds) {
            $res['DataImportIds'] = $this->dataImportIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceDataImportStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataImportIds'])) {
            if (!empty($map['DataImportIds'])) {
                $model->dataImportIds = $map['DataImportIds'];
            }
        }

        return $model;
    }
}
