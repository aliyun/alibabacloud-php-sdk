<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class AcknowledgeTaskResultRequest extends Model
{
    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string[]
     */
    public $taskDetailNo;
    protected $_name = [
        'userClientIp' => 'UserClientIp',
        'lang'         => 'Lang',
        'taskDetailNo' => 'TaskDetailNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->taskDetailNo) {
            $res['TaskDetailNo'] = $this->taskDetailNo;
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
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['TaskDetailNo'])) {
            if (!empty($map['TaskDetailNo'])) {
                $model->taskDetailNo = $map['TaskDetailNo'];
            }
        }

        return $model;
    }
}
