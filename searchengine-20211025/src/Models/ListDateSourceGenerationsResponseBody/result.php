<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDateSourceGenerationsResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $buildDeployId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $dataDumpRoot;

    /**
     * @var int
     */
    public $generation;

    /**
     * @var int[]
     */
    public $partition;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'buildDeployId' => 'buildDeployId',
        'createTime' => 'createTime',
        'dataDumpRoot' => 'dataDumpRoot',
        'generation' => 'generation',
        'partition' => 'partition',
        'status' => 'status',
        'timestamp' => 'timestamp',
    ];

    public function validate()
    {
        if (\is_array($this->partition)) {
            Model::validateArray($this->partition);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildDeployId) {
            $res['buildDeployId'] = $this->buildDeployId;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->dataDumpRoot) {
            $res['dataDumpRoot'] = $this->dataDumpRoot;
        }

        if (null !== $this->generation) {
            $res['generation'] = $this->generation;
        }

        if (null !== $this->partition) {
            if (\is_array($this->partition)) {
                $res['partition'] = [];
                foreach ($this->partition as $key1 => $value1) {
                    $res['partition'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
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
        if (isset($map['buildDeployId'])) {
            $model->buildDeployId = $map['buildDeployId'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['dataDumpRoot'])) {
            $model->dataDumpRoot = $map['dataDumpRoot'];
        }

        if (isset($map['generation'])) {
            $model->generation = $map['generation'];
        }

        if (isset($map['partition'])) {
            if (!empty($map['partition'])) {
                $model->partition = [];
                foreach ($map['partition'] as $key1 => $value1) {
                    $model->partition[$key1] = $value1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        return $model;
    }
}
