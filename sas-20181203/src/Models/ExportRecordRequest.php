<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ExportRecordRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $params;

    /**
     * @var string
     */
    public $exportType;
    protected $_name = [
        'lang'       => 'Lang',
        'params'     => 'Params',
        'exportType' => 'ExportType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->exportType) {
            $res['ExportType'] = $this->exportType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['ExportType'])) {
            $model->exportType = $map['ExportType'];
        }

        return $model;
    }
}
