<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateScheduledTaskRequest\taskDetail;

use AlibabaCloud\Dara\Model;

class relatedSkills extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $skillCode;

    /**
     * @var string[]
     */
    public $sourceIds;
    protected $_name = [
        'displayName' => 'displayName',
        'name' => 'name',
        'skillCode' => 'skillCode',
        'sourceIds' => 'sourceIds',
    ];

    public function validate()
    {
        if (\is_array($this->sourceIds)) {
            Model::validateArray($this->sourceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->skillCode) {
            $res['skillCode'] = $this->skillCode;
        }

        if (null !== $this->sourceIds) {
            if (\is_array($this->sourceIds)) {
                $res['sourceIds'] = [];
                $n1 = 0;
                foreach ($this->sourceIds as $item1) {
                    $res['sourceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['skillCode'])) {
            $model->skillCode = $map['skillCode'];
        }

        if (isset($map['sourceIds'])) {
            if (!empty($map['sourceIds'])) {
                $model->sourceIds = [];
                $n1 = 0;
                foreach ($map['sourceIds'] as $item1) {
                    $model->sourceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
