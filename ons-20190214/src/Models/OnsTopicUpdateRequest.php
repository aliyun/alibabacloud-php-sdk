<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\Tea\Model;

class OnsTopicUpdateRequest extends Model
{
    /**
     * @description The ID of the instance to which the topic belongs.
     *
     * @example MQ_INST_111111111111_DOxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The read/write mode that you want to configure for the topic. Valid values:
     *
     *   **6:** Both read and write operations are allowed.
     *   **4:** Write operations are forbidden.
     *   **2:** Read operations are forbidden.
     *
     * @example 6
     *
     * @var int
     */
    public $perm;

    /**
     * @description The name of the topic that you want to manage.
     *
     * @example test
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'perm'       => 'Perm',
        'topic'      => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->perm) {
            $res['Perm'] = $this->perm;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OnsTopicUpdateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Perm'])) {
            $model->perm = $map['Perm'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
