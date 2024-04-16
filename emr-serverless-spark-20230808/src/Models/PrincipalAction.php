<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Tea\Model;

class PrincipalAction extends Model
{
    /**
     * @example acs:emr::workspaceId:action/create_queue
     *
     * @var string
     */
    public $actionArn;

    /**
     * @example acs:emr::workspaceId:user/237593691541622267
     *
     * @var string
     */
    public $principalArn;
    protected $_name = [
        'actionArn'    => 'actionArn',
        'principalArn' => 'principalArn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionArn) {
            $res['actionArn'] = $this->actionArn;
        }
        if (null !== $this->principalArn) {
            $res['principalArn'] = $this->principalArn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PrincipalAction
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['actionArn'])) {
            $model->actionArn = $map['actionArn'];
        }
        if (isset($map['principalArn'])) {
            $model->principalArn = $map['principalArn'];
        }

        return $model;
    }
}
