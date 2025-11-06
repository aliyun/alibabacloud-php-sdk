<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;

class AcknowledgeTaskResultRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string[]
     */
    public $taskDetailNo;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'lang' => 'Lang',
        'taskDetailNo' => 'TaskDetailNo',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
        if (\is_array($this->taskDetailNo)) {
            Model::validateArray($this->taskDetailNo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->taskDetailNo) {
            if (\is_array($this->taskDetailNo)) {
                $res['TaskDetailNo'] = [];
                $n1 = 0;
                foreach ($this->taskDetailNo as $item1) {
                    $res['TaskDetailNo'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['TaskDetailNo'])) {
            if (!empty($map['TaskDetailNo'])) {
                $model->taskDetailNo = [];
                $n1 = 0;
                foreach ($map['TaskDetailNo'] as $item1) {
                    $model->taskDetailNo[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
