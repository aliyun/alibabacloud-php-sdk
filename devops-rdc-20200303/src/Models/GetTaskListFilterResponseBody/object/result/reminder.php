<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskListFilterResponseBody\object\result;

use AlibabaCloud\Tea\Model;

class reminder extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string[]
     */
    public $members;

    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string[]
     */
    public $rules;
    protected $_name = [
        'type'      => 'Type',
        'members'   => 'Members',
        'date'      => 'Date',
        'creatorId' => 'CreatorId',
        'rules'     => 'Rules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->members) {
            $res['Members'] = $this->members;
        }
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->rules) {
            $res['Rules'] = $this->rules;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reminder
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Members'])) {
            if (!empty($map['Members'])) {
                $model->members = $map['Members'];
            }
        }
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = $map['Rules'];
            }
        }

        return $model;
    }
}
