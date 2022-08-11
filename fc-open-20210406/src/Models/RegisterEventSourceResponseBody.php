<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class RegisterEventSourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $sourceArn;
    protected $_name = [
        'createdTime' => 'createdTime',
        'sourceArn'   => 'sourceArn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }
        if (null !== $this->sourceArn) {
            $res['sourceArn'] = $this->sourceArn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterEventSourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }
        if (isset($map['sourceArn'])) {
            $model->sourceArn = $map['sourceArn'];
        }

        return $model;
    }
}
