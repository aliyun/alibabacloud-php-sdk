<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models\ListEventSourcesResponseBody;

use AlibabaCloud\Tea\Model;

class eventSources extends Model
{
    /**
     * @example 2016-08-15T16:06:05.000+0000
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description Jianyi
     *
     * @example acs:eventbridge:cn-shanghai:123456:eventbus/mns-test/rule/fc-test1/target/abc
     *
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
     * @return eventSources
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
