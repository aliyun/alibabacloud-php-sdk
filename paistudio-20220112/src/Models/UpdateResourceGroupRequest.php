<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class UpdateResourceGroupRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $unbind;

    /**
     * @var UserVpc
     */
    public $userVpc;
    protected $_name = [
        'description' => 'Description',
        'name'        => 'Name',
        'unbind'      => 'Unbind',
        'userVpc'     => 'UserVpc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->unbind) {
            $res['Unbind'] = $this->unbind;
        }
        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateResourceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Unbind'])) {
            $model->unbind = $map['Unbind'];
        }
        if (isset($map['UserVpc'])) {
            $model->userVpc = UserVpc::fromMap($map['UserVpc']);
        }

        return $model;
    }
}
