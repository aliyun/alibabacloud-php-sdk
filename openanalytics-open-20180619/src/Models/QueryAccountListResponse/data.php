<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\QueryAccountListResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $shortName;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $ramUid;
    protected $_name = [
        'userName'  => 'UserName',
        'role'      => 'Role',
        'shortName' => 'ShortName',
        'remark'    => 'Remark',
        'ramUid'    => 'RamUid',
    ];

    public function validate()
    {
        Model::validateRequired('userName', $this->userName, true);
        Model::validateRequired('role', $this->role, true);
        Model::validateRequired('shortName', $this->shortName, true);
        Model::validateRequired('remark', $this->remark, true);
        Model::validateRequired('ramUid', $this->ramUid, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->shortName) {
            $res['ShortName'] = $this->shortName;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->ramUid) {
            $res['RamUid'] = $this->ramUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['ShortName'])) {
            $model->shortName = $map['ShortName'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RamUid'])) {
            $model->ramUid = $map['RamUid'];
        }

        return $model;
    }
}
