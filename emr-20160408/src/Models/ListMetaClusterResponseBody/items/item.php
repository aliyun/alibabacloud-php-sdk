<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListMetaClusterResponseBody\items;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListMetaClusterResponseBody\items\item\softwareInfo;
use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var softwareInfo
     */
    public $softwareInfo;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'name'         => 'Name',
        'softwareInfo' => 'SoftwareInfo',
        'id'           => 'Id',
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
        if (null !== $this->softwareInfo) {
            $res['SoftwareInfo'] = null !== $this->softwareInfo ? $this->softwareInfo->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SoftwareInfo'])) {
            $model->softwareInfo = softwareInfo::fromMap($map['SoftwareInfo']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
