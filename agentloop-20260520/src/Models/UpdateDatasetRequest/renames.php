<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdateDatasetRequest;

use AlibabaCloud\Dara\Model;

class renames extends Model
{
    /**
     * @var string
     */
    public $newName;

    /**
     * @var string
     */
    public $oldName;
    protected $_name = [
        'newName' => 'newName',
        'oldName' => 'oldName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->newName) {
            $res['newName'] = $this->newName;
        }

        if (null !== $this->oldName) {
            $res['oldName'] = $this->oldName;
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
        if (isset($map['newName'])) {
            $model->newName = $map['newName'];
        }

        if (isset($map['oldName'])) {
            $model->oldName = $map['oldName'];
        }

        return $model;
    }
}
