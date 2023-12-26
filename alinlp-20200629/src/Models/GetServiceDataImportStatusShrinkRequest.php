<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models;

use AlibabaCloud\Tea\Model;

class GetServiceDataImportStatusShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dataImportIdsShrink;
    protected $_name = [
        'dataImportIdsShrink' => 'DataImportIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataImportIdsShrink) {
            $res['DataImportIds'] = $this->dataImportIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceDataImportStatusShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataImportIds'])) {
            $model->dataImportIdsShrink = $map['DataImportIds'];
        }

        return $model;
    }
}
