<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models;

use AlibabaCloud\Tea\Model;

class AcknowledgeTaskResultRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $taskDetailNo;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'lang'         => 'Lang',
        'taskDetailNo' => 'TaskDetailNo',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->taskDetailNo) {
            $res['TaskDetailNo'] = $this->taskDetailNo;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AcknowledgeTaskResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['TaskDetailNo'])) {
            if (!empty($map['TaskDetailNo'])) {
                $model->taskDetailNo = $map['TaskDetailNo'];
            }
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
