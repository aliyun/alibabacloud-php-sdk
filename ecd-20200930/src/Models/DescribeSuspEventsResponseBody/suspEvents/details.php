<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSuspEventsResponseBody\suspEvents;

use AlibabaCloud\Tea\Model;

class details extends Model
{
    /**
     * @description The original property name.
     *
     * @example ${suspicious.property.process_path}
     *
     * @var string
     */
    public $name;

    /**
     * @description The property name that is displayed after the Name parameter was translated.
     *
     * @example Process path
     *
     * @var string
     */
    public $nameDisplay;

    /**
     * @description The format in which the property value is displayed. The property value can be a string or displayed in the HTML or Markdown format.
     *
     * @example text
     *
     * @var string
     */
    public $type;

    /**
     * @description The property value.
     *
     * @example N/A
     *
     * @var string
     */
    public $value;

    /**
     * @description The property value that is displayed after the Value parameter was translated.
     *
     * @example N/A
     *
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
