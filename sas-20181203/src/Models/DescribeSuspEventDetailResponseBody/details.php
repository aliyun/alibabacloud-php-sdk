<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventDetailResponseBody;

use AlibabaCloud\Tea\Model;

class details extends Model
{
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
    public $infoType;

    /**
     * @var string
     */
    public $nameDisplay;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'type'        => 'Type',
        'value'       => 'Value',
        'infoType'    => 'InfoType',
        'nameDisplay' => 'NameDisplay',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->infoType) {
            $res['InfoType'] = $this->infoType;
        }
        if (null !== $this->nameDisplay) {
            $res['NameDisplay'] = $this->nameDisplay;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['InfoType'])) {
            $model->infoType = $map['InfoType'];
        }
        if (isset($map['NameDisplay'])) {
            $model->nameDisplay = $map['NameDisplay'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
