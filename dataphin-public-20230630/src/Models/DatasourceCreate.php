<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class DatasourceCreate extends Model
{
    /**
     * @var bool
     */
    public $checkActivity;

    /**
     * @var string[]
     */
    public $configs;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'checkActivity' => 'CheckActivity',
        'configs'       => 'Configs',
        'description'   => 'Description',
        'name'          => 'Name',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkActivity) {
            $res['CheckActivity'] = $this->checkActivity;
        }
        if (null !== $this->configs) {
            $res['Configs'] = $this->configs;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DatasourceCreate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckActivity'])) {
            $model->checkActivity = $map['CheckActivity'];
        }
        if (isset($map['Configs'])) {
            $model->configs = $map['Configs'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
