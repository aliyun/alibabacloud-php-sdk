<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models;

use AlibabaCloud\Dara\Model;

class GetLogColumnTranslateResultRequest extends Model
{
    /**
     * @var string
     */
    public $columnValue;

    /**
     * @var string
     */
    public $translateConfig;
    protected $_name = [
        'columnValue' => 'ColumnValue',
        'translateConfig' => 'TranslateConfig',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnValue) {
            $res['ColumnValue'] = $this->columnValue;
        }

        if (null !== $this->translateConfig) {
            $res['TranslateConfig'] = $this->translateConfig;
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
        if (isset($map['ColumnValue'])) {
            $model->columnValue = $map['ColumnValue'];
        }

        if (isset($map['TranslateConfig'])) {
            $model->translateConfig = $map['TranslateConfig'];
        }

        return $model;
    }
}
