<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBizUnitInfoResponseBody\bizUnitInfo;

use AlibabaCloud\Dara\Model;

class envList extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $envName;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'displayName' => 'DisplayName',
        'envName' => 'EnvName',
        'name' => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->envName) {
            $res['EnvName'] = $this->envName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['EnvName'])) {
            $model->envName = $map['EnvName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
