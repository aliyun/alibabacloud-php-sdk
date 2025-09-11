<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineResponseBody\envs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineResponseBody\envs\codeDeploy\codeVersions;

class codeDeploy extends Model
{
    /**
     * @var codeVersions[]
     */
    public $codeVersions;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $deployId;

    /**
     * @var string
     */
    public $strategy;
    protected $_name = [
        'codeVersions' => 'CodeVersions',
        'creationTime' => 'CreationTime',
        'deployId' => 'DeployId',
        'strategy' => 'Strategy',
    ];

    public function validate()
    {
        if (\is_array($this->codeVersions)) {
            Model::validateArray($this->codeVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codeVersions) {
            if (\is_array($this->codeVersions)) {
                $res['CodeVersions'] = [];
                $n1 = 0;
                foreach ($this->codeVersions as $item1) {
                    $res['CodeVersions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->deployId) {
            $res['DeployId'] = $this->deployId;
        }

        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
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
                $n1 = 0;
                foreach ($map['CodeVersions'] as $item1) {
                    $model->codeVersions[$n1] = codeVersions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['DeployId'])) {
            $model->deployId = $map['DeployId'];
        }

        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }

        return $model;
    }
}
