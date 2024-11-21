<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineResponseBody\codeVersions;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineResponseBody\envs;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineResponseBody\relatedRecords;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineResponseBody\relatedRoutes;
use AlibabaCloud\Tea\Model;

class GetRoutineResponseBody extends Model
{
    /**
     * @description The code versions.
     *
     * @var codeVersions[]
     */
    public $codeVersions;

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
     * @description The records associated with the routine.
     *
     * @var relatedRecords[]
     */
    public $relatedRecords;

    /**
     * @description The routes associated with the routine.
     *
     * @var relatedRoutes[]
     */
    public $relatedRoutes;

    /**
     * @description The request ID.
     *
     * @example EDBD3EB3-97DA-5465-AEF5-8DCA5DC5E395
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'codeVersions'         => 'CodeVersions',
        'createTime'           => 'CreateTime',
        'defaultRelatedRecord' => 'DefaultRelatedRecord',
        'description'          => 'Description',
        'envs'                 => 'Envs',
        'relatedRecords'       => 'RelatedRecords',
        'relatedRoutes'        => 'RelatedRoutes',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeVersions) {
            $res['CodeVersions'] = [];
            if (null !== $this->codeVersions && \is_array($this->codeVersions)) {
                $n = 0;
                foreach ($this->codeVersions as $item) {
                    $res['CodeVersions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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
        if (null !== $this->relatedRecords) {
            $res['RelatedRecords'] = [];
            if (null !== $this->relatedRecords && \is_array($this->relatedRecords)) {
                $n = 0;
                foreach ($this->relatedRecords as $item) {
                    $res['RelatedRecords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->relatedRoutes) {
            $res['RelatedRoutes'] = [];
            if (null !== $this->relatedRoutes && \is_array($this->relatedRoutes)) {
                $n = 0;
                foreach ($this->relatedRoutes as $item) {
                    $res['RelatedRoutes'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['CodeVersions'])) {
            if (!empty($map['CodeVersions'])) {
                $model->codeVersions = [];
                $n                   = 0;
                foreach ($map['CodeVersions'] as $item) {
                    $model->codeVersions[$n++] = null !== $item ? codeVersions::fromMap($item) : $item;
                }
            }
        }
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
                $n           = 0;
                foreach ($map['Envs'] as $item) {
                    $model->envs[$n++] = null !== $item ? envs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RelatedRecords'])) {
            if (!empty($map['RelatedRecords'])) {
                $model->relatedRecords = [];
                $n                     = 0;
                foreach ($map['RelatedRecords'] as $item) {
                    $model->relatedRecords[$n++] = null !== $item ? relatedRecords::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RelatedRoutes'])) {
            if (!empty($map['RelatedRoutes'])) {
                $model->relatedRoutes = [];
                $n                    = 0;
                foreach ($map['RelatedRoutes'] as $item) {
                    $model->relatedRoutes[$n++] = null !== $item ? relatedRoutes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
