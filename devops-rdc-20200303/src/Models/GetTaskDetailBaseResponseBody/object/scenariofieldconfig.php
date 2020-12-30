<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskDetailBaseResponseBody\object;

use AlibabaCloud\Tea\Model;

class scenariofieldconfig extends Model
{
    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $proTemplateConfigType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'icon'                  => 'Icon',
        'proTemplateConfigType' => 'ProTemplateConfigType',
        'name'                  => 'Name',
        'id'                    => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->proTemplateConfigType) {
            $res['ProTemplateConfigType'] = $this->proTemplateConfigType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scenariofieldconfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['ProTemplateConfigType'])) {
            $model->proTemplateConfigType = $map['ProTemplateConfigType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
