<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSuspEventsResponseBody\suspEvents;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return details
     */
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
