<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomDataExportTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $exportParamShrink;
    protected $_name = [
        'exportParamShrink' => 'ExportParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exportParamShrink) {
            $res['ExportParam'] = $this->exportParamShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCustomDataExportTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExportParam'])) {
            $model->exportParamShrink = $map['ExportParam'];
        }

        return $model;
    }
}
