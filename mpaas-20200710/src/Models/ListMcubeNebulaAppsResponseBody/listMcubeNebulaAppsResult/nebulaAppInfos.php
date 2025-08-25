<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20200710\Models\ListMcubeNebulaAppsResponseBody\listMcubeNebulaAppsResult;

use AlibabaCloud\Dara\Model;

class nebulaAppInfos extends Model
{
    /**
     * @var string
     */
    public $h5Id;

    /**
     * @var string
     */
    public $h5Name;
    protected $_name = [
        'h5Id' => 'H5Id',
        'h5Name' => 'H5Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->h5Id) {
            $res['H5Id'] = $this->h5Id;
        }

        if (null !== $this->h5Name) {
            $res['H5Name'] = $this->h5Name;
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
        if (isset($map['H5Id'])) {
            $model->h5Id = $map['H5Id'];
        }

        if (isset($map['H5Name'])) {
            $model->h5Name = $map['H5Name'];
        }

        return $model;
    }
}
