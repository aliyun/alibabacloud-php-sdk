<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskInfoByVersionResponseBody\taskInfo;

use AlibabaCloud\Dara\Model;

class executeRerunConfig extends Model
{
    /**
     * @var string
     */
    public $customRerunInterval;

    /**
     * @var string
     */
    public $customRerunTimes;

    /**
     * @var bool
     */
    public $followSystem;
    protected $_name = [
        'customRerunInterval' => 'CustomRerunInterval',
        'customRerunTimes' => 'CustomRerunTimes',
        'followSystem' => 'FollowSystem',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customRerunInterval) {
            $res['CustomRerunInterval'] = $this->customRerunInterval;
        }

        if (null !== $this->customRerunTimes) {
            $res['CustomRerunTimes'] = $this->customRerunTimes;
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
        if (isset($map['CustomRerunInterval'])) {
            $model->customRerunInterval = $map['CustomRerunInterval'];
        }

        if (isset($map['CustomRerunTimes'])) {
            $model->customRerunTimes = $map['CustomRerunTimes'];
        }

        if (isset($map['FollowSystem'])) {
            $model->followSystem = $map['FollowSystem'];
        }

        return $model;
    }
}
