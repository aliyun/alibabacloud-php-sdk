<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\RemoveProjectMemberRequest;

use AlibabaCloud\Tea\Model;

class removeCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example DEV
     *
     * @var string
     */
    public $env;

    /**
     * @var string[]
     */
    public $userIdList;
    protected $_name = [
        'env' => 'Env',
        'userIdList' => 'UserIdList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->userIdList) {
            $res['UserIdList'] = $this->userIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return removeCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['UserIdList'])) {
            if (!empty($map['UserIdList'])) {
                $model->userIdList = $map['UserIdList'];
            }
        }

        return $model;
    }
}
