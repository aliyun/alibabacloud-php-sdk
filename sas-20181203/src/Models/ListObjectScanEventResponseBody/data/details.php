<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListObjectScanEventResponseBody\data;

use AlibabaCloud\Dara\Model;

class details extends Model
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $nameDisplay;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $value;
    /**
     * @var string
     */
    public $valueDisplay;
    protected $_name = [
        'name'         => 'Name',
        'nameDisplay'  => 'NameDisplay',
        'type'         => 'Type',
        'value'        => 'Value',
        'valueDisplay' => 'ValueDisplay',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nameDisplay) {
            $res['NameDisplay'] = $this->nameDisplay;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        if (null !== $this->valueDisplay) {
            $res['ValueDisplay'] = $this->valueDisplay;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NameDisplay'])) {
            $model->nameDisplay = $map['NameDisplay'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        if (isset($map['ValueDisplay'])) {
            $model->valueDisplay = $map['ValueDisplay'];
        }

        return $model;
    }
}
