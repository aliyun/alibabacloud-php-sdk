<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineResponseBody\envs;
use AlibabaCloud\Tea\Model;

class GetRoutineResponseBody extends Model
{
    /**
     * @description The time when the routine was created.
     *
     * @example 2024-03-11T01:23:21Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The default record name to access.
     *
     * @example routine1.example.com
     *
     * @var string
     */
    public $defaultRelatedRecord;

    /**
     * @description The description of the routine.
     *
     * @example ZWRpdCByb3V0aW5lIGNvbmZpZyBkZXNjcmlwdGlvbg
     *
     * @var string
     */
    public $description;

    /**
     * @description The information about the environments.
     *
     * @var envs[]
     */
    public $envs;

    /**
     * @description The request ID.
     *
     * @example EDBD3EB3-97DA-5465-AEF5-8DCA5DC5E395
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'defaultRelatedRecord' => 'DefaultRelatedRecord',
        'description' => 'Description',
        'envs' => 'Envs',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->defaultRelatedRecord) {
            $res['DefaultRelatedRecord'] = $this->defaultRelatedRecord;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->envs) {
            $res['Envs'] = [];
            if (null !== $this->envs && \is_array($this->envs)) {
                $n = 0;
                foreach ($this->envs as $item) {
                    $res['Envs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRoutineResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DefaultRelatedRecord'])) {
            $model->defaultRelatedRecord = $map['DefaultRelatedRecord'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Envs'])) {
            if (!empty($map['Envs'])) {
                $model->envs = [];
                $n = 0;
                foreach ($map['Envs'] as $item) {
                    $model->envs[$n++] = null !== $item ? envs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
