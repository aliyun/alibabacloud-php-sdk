<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardResponseBody\standardInfo\standardGeneralMonitorConfig\standardMonitorConfigList;

use AlibabaCloud\Dara\Model;

class attributeMonitorConfig extends Model
{
    /**
     * @var string
     */
    public $columnName;

    /**
     * @var bool
     */
    public $isCaseSensitive;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'columnName' => 'ColumnName',
        'isCaseSensitive' => 'IsCaseSensitive',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }

        if (null !== $this->isCaseSensitive) {
            $res['IsCaseSensitive'] = $this->isCaseSensitive;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }

        if (isset($map['IsCaseSensitive'])) {
            $model->isCaseSensitive = $map['IsCaseSensitive'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
