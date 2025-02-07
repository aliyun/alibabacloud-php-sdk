<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineResponseBody\codeVersions;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineResponseBody\envs;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineResponseBody\relatedRecords;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineResponseBody\relatedRoutes;

class GetRoutineResponseBody extends Model
{
    /**
     * @var codeVersions[]
     */
    public $codeVersions;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $defaultRelatedRecord;
    /**
     * @var string
     */
    public $description;
    /**
     * @var envs[]
     */
    public $envs;
    /**
     * @var relatedRecords[]
     */
    public $relatedRecords;
    /**
     * @var relatedRoutes[]
     */
    public $relatedRoutes;
    /**
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
        if (\is_array($this->codeVersions)) {
            Model::validateArray($this->codeVersions);
        }
        if (\is_array($this->envs)) {
            Model::validateArray($this->envs);
        }
        if (\is_array($this->relatedRecords)) {
            Model::validateArray($this->relatedRecords);
        }
        if (\is_array($this->relatedRoutes)) {
            Model::validateArray($this->relatedRoutes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codeVersions) {
            if (\is_array($this->codeVersions)) {
                $res['CodeVersions'] = [];
                $n1                  = 0;
                foreach ($this->codeVersions as $item1) {
                    $res['CodeVersions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->envs)) {
                $res['Envs'] = [];
                $n1          = 0;
                foreach ($this->envs as $item1) {
                    $res['Envs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->relatedRecords) {
            if (\is_array($this->relatedRecords)) {
                $res['RelatedRecords'] = [];
                $n1                    = 0;
                foreach ($this->relatedRecords as $item1) {
                    $res['RelatedRecords'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->relatedRoutes) {
            if (\is_array($this->relatedRoutes)) {
                $res['RelatedRoutes'] = [];
                $n1                   = 0;
                foreach ($this->relatedRoutes as $item1) {
                    $res['RelatedRoutes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CodeVersions'])) {
            if (!empty($map['CodeVersions'])) {
                $model->codeVersions = [];
                $n1                  = 0;
                foreach ($map['CodeVersions'] as $item1) {
                    $model->codeVersions[$n1++] = codeVersions::fromMap($item1);
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
                $n1          = 0;
                foreach ($map['Envs'] as $item1) {
                    $model->envs[$n1++] = envs::fromMap($item1);
                }
            }
        }

        if (isset($map['RelatedRecords'])) {
            if (!empty($map['RelatedRecords'])) {
                $model->relatedRecords = [];
                $n1                    = 0;
                foreach ($map['RelatedRecords'] as $item1) {
                    $model->relatedRecords[$n1++] = relatedRecords::fromMap($item1);
                }
            }
        }

        if (isset($map['RelatedRoutes'])) {
            if (!empty($map['RelatedRoutes'])) {
                $model->relatedRoutes = [];
                $n1                   = 0;
                foreach ($map['RelatedRoutes'] as $item1) {
                    $model->relatedRoutes[$n1++] = relatedRoutes::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
