<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class AddSceneRequest extends Model
{
    /**
     * @var string
     */
    public $customerUid;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'customerUid' => 'CustomerUid',
        'name'        => 'Name',
        'projectId'   => 'ProjectId',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customerUid) {
            $res['CustomerUid'] = $this->customerUid;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddSceneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomerUid'])) {
            $model->customerUid = $map['CustomerUid'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
