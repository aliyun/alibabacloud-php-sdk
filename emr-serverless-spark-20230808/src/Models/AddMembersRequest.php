<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Tea\Model;

class AddMembersRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $memberArns;

    /**
     * @description The workspace ID.
     *
     * This parameter is required.
     * @example w-975bcfda9625****
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'memberArns'  => 'memberArns',
        'workspaceId' => 'workspaceId',
        'regionId'    => 'regionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->memberArns) {
            $res['memberArns'] = $this->memberArns;
        }
        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddMembersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['memberArns'])) {
            if (!empty($map['memberArns'])) {
                $model->memberArns = $map['memberArns'];
            }
        }
        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
