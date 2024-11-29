<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\mnsParameters;

use AlibabaCloud\Tea\Model;

class mnsParameter extends Model
{
    /**
     * @description The ARN of the MNS queue.
     *
     * - ResourceId: the resource ID
     * @var string
     */
    public $arn;

    /**
     * @description The ID of the recipient.
     *
     * @example 2
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the SMQ queue.
     *
     * @example testQueue
     *
     * @var string
     */
    public $queue;

    /**
     * @description The region for SMQ.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The SMQ topic.
     *
     * @example topic_sample
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'arn'    => 'Arn',
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
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
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
     * @return mnsParameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
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
