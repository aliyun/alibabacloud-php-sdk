<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SubmitBatchTaskRequest\submitCommand;

use AlibabaCloud\Dara\Model;

class executeTimeOutConfig extends Model
{
    /**
     * @var string
     */
    public $customValues;

    /**
     * @var bool
     */
    public $followSystem;
    protected $_name = [
        'customValues' => 'CustomValues',
        'followSystem' => 'FollowSystem',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customValues) {
            $res['CustomValues'] = $this->customValues;
        }

        if (null !== $this->followSystem) {
            $res['FollowSystem'] = $this->followSystem;
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
        if (isset($map['CustomValues'])) {
            $model->customValues = $map['CustomValues'];
        }

        if (isset($map['FollowSystem'])) {
            $model->followSystem = $map['FollowSystem'];
        }

        return $model;
    }
}
