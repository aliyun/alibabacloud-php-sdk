<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListConfigCentersResponseBody\configCentersList;

use AlibabaCloud\Tea\Model;

class listConfigCenters extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $group;
    protected $_name = [
        'appName' => 'AppName',
        'dataId'  => 'DataId',
        'id'      => 'Id',
        'group'   => 'Group',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listConfigCenters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }

        return $model;
    }
}
