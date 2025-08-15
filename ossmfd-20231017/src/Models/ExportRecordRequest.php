<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OssMfd\V20231017\Models;

use AlibabaCloud\Dara\Model;

class ExportRecordRequest extends Model
{
    /**
     * @var string
     */
    public $exportType;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $params;
    protected $_name = [
        'exportType' => 'ExportType',
        'lang' => 'Lang',
        'params' => 'Params',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exportType) {
            $res['ExportType'] = $this->exportType;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExportType'])) {
            $model->exportType = $map['ExportType'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }

        return $model;
    }
}
