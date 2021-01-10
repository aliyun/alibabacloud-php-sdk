<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponseBody;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponseBody\result\quota;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $created;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var bool
     */
    public $autoSwitch;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $status;

    /**
     * @var mixed[]
     */
    public $schema;

    /**
     * @var int
     */
    public $progressPercent;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $algoDeploymentId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $fetchFields;

    /**
     * @var quota
     */
    public $quota;
    protected $_name = [
        'created'          => 'created',
        'clusterName'      => 'clusterName',
        'autoSwitch'       => 'autoSwitch',
        'type'             => 'type',
        'status'           => 'status',
        'schema'           => 'schema',
        'progressPercent'  => 'progressPercent',
        'id'               => 'id',
        'algoDeploymentId' => 'algoDeploymentId',
        'description'      => 'description',
        'fetchFields'      => 'fetchFields',
        'quota'            => 'quota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->clusterName) {
            $res['clusterName'] = $this->clusterName;
        }
        if (null !== $this->autoSwitch) {
            $res['autoSwitch'] = $this->autoSwitch;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->schema) {
            $res['schema'] = $this->schema;
        }
        if (null !== $this->progressPercent) {
            $res['progressPercent'] = $this->progressPercent;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->algoDeploymentId) {
            $res['algoDeploymentId'] = $this->algoDeploymentId;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->fetchFields) {
            $res['fetchFields'] = $this->fetchFields;
        }
        if (null !== $this->quota) {
            $res['quota'] = null !== $this->quota ? $this->quota->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['clusterName'])) {
            $model->clusterName = $map['clusterName'];
        }
        if (isset($map['autoSwitch'])) {
            $model->autoSwitch = $map['autoSwitch'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['schema'])) {
            $model->schema = $map['schema'];
        }
        if (isset($map['progressPercent'])) {
            $model->progressPercent = $map['progressPercent'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['algoDeploymentId'])) {
            $model->algoDeploymentId = $map['algoDeploymentId'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['fetchFields'])) {
            if (!empty($map['fetchFields'])) {
                $model->fetchFields = $map['fetchFields'];
            }
        }
        if (isset($map['quota'])) {
            $model->quota = quota::fromMap($map['quota']);
        }

        return $model;
    }
}
