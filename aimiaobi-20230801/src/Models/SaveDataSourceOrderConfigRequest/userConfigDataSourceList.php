<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SaveDataSourceOrderConfigRequest;

use AlibabaCloud\Tea\Model;

class userConfigDataSourceList extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example QuarkCommonNews
     *
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example 20
     *
     * @var int
     */
    public $number;

    /**
     * @description This parameter is required.
     *
     * @example SystemSearch
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'code' => 'Code',
        'enable' => 'Enable',
        'name' => 'Name',
        'number' => 'Number',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userConfigDataSourceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
