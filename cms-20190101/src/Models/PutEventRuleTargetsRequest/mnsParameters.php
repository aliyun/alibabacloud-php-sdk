<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsRequest;

use AlibabaCloud\Tea\Model;

class mnsParameters extends Model
{
    /**
     * @description The ID of the recipient that receives alert notifications. Valid values of N: 1 to 5.
     *
     * @example 3
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the MNS queue. Valid values of N: 1 to 5.
     *
     * @example queue1
     *
     * @var string
     */
    public $queue;

    /**
     * @description The region where Message Service (MNS) is deployed. Valid values of N: 1 to 5.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The MNS topic.
     *
     * @example topic_sample
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'id'     => 'Id',
        'queue'  => 'Queue',
        'region' => 'Region',
        'topic'  => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mnsParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
