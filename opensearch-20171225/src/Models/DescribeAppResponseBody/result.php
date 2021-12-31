<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponseBody;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponseBody\result\domain;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponseBody\result\quota;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $algoDeploymentId;

    /**
     * @var bool
     */
    public $autoSwitch;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var int
     */
    public $created;

    /**
     * @var string
     */
    public $description;

    /**
     * @var domain
     */
    public $domain;

    /**
     * @var string[]
     */
    public $fetchFields;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $progressPercent;

    /**
     * @var quota
     */
    public $quota;

    /**
     * @var mixed[]
     */
    public $schema;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'algoDeploymentId' => 'algoDeploymentId',
        'autoSwitch'       => 'autoSwitch',
        'clusterName'      => 'clusterName',
        'created'          => 'created',
        'description'      => 'description',
        'domain'           => 'domain',
        'fetchFields'      => 'fetchFields',
        'id'               => 'id',
        'progressPercent'  => 'progressPercent',
        'quota'            => 'quota',
        'schema'           => 'schema',
        'status'           => 'status',
        'type'             => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algoDeploymentId) {
            $res['algoDeploymentId'] = $this->algoDeploymentId;
        }
        if (null !== $this->autoSwitch) {
            $res['autoSwitch'] = $this->autoSwitch;
        }
        if (null !== $this->clusterName) {
            $res['clusterName'] = $this->clusterName;
        }
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->domain) {
            $res['domain'] = null !== $this->domain ? $this->domain->toMap() : null;
        }
        if (null !== $this->fetchFields) {
            $res['fetchFields'] = $this->fetchFields;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->progressPercent) {
            $res['progressPercent'] = $this->progressPercent;
        }
        if (null !== $this->quota) {
            $res['quota'] = null !== $this->quota ? $this->quota->toMap() : null;
        }
        if (null !== $this->schema) {
            $res['schema'] = $this->schema;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['algoDeploymentId'])) {
            $model->algoDeploymentId = $map['algoDeploymentId'];
        }
        if (isset($map['autoSwitch'])) {
            $model->autoSwitch = $map['autoSwitch'];
        }
        if (isset($map['clusterName'])) {
            $model->clusterName = $map['clusterName'];
        }
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['domain'])) {
            $model->domain = domain::fromMap($map['domain']);
        }
        if (isset($map['fetchFields'])) {
            if (!empty($map['fetchFields'])) {
                $model->fetchFields = $map['fetchFields'];
            }
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['progressPercent'])) {
            $model->progressPercent = $map['progressPercent'];
        }
        if (isset($map['quota'])) {
            $model->quota = quota::fromMap($map['quota']);
        }
        if (isset($map['schema'])) {
            $model->schema = $map['schema'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
