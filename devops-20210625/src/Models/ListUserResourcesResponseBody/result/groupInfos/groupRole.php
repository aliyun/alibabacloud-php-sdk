<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListUserResourcesResponseBody\result\groupInfos;

use AlibabaCloud\Tea\Model;

class groupRole extends Model
{
    /**
     * @example 40
     *
     * @var int
     */
    public $accessLevel;

    /**
     * @var string
     */
    public $cnRoleName;

    /**
     * @example Admin
     *
     * @var string
     */
    public $enRoleName;

    /**
     * @example 35268
     *
     * @var int
     */
    public $sourceId;

    /**
     * @example Namespace
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'accessLevel' => 'accessLevel',
        'cnRoleName'  => 'cnRoleName',
        'enRoleName'  => 'enRoleName',
        'sourceId'    => 'sourceId',
        'sourceType'  => 'sourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessLevel) {
            $res['accessLevel'] = $this->accessLevel;
        }
        if (null !== $this->cnRoleName) {
            $res['cnRoleName'] = $this->cnRoleName;
        }
        if (null !== $this->enRoleName) {
            $res['enRoleName'] = $this->enRoleName;
        }
        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }
        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupRole
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessLevel'])) {
            $model->accessLevel = $map['accessLevel'];
        }
        if (isset($map['cnRoleName'])) {
            $model->cnRoleName = $map['cnRoleName'];
        }
        if (isset($map['enRoleName'])) {
            $model->enRoleName = $map['enRoleName'];
        }
        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }
        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        return $model;
    }
}
