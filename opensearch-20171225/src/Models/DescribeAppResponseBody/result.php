<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponseBody;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponseBody\result\domain;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponseBody\result\quota;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The ID of the created rough sort expression.
     *
     * @example 0
     *
     * @var int
     */
    public $algoDeploymentId;

    /**
     * @description Indicates whether the version is automatically published to the online environment.
     *
     * @example true
     *
     * @var bool
     */
    public $autoSwitch;

    /**
     * @example -
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The timestamp when the version was created.
     *
     * @example 1590977140
     *
     * @var int
     */
    public $created;

    /**
     * @description The description of the version.
     *
     * @example -
     *
     * @var string
     */
    public $description;

    /**
     * @example GENERAL
     *
     * @var domain
     */
    public $domain;

    /**
     * @description The default display fields.
     *
     * @example []
     *
     * @var string[]
     */
    public $fetchFields;

    /**
     * @description The ID of the version.
     *
     * @example 100303063
     *
     * @var string
     */
    public $id;

    /**
     * @description The progress of data import, in percentage. For example, a value of 83 indicates 83%.
     *
     * @example 100
     *
     * @var int
     */
    public $progressPercent;

    /**
     * @description The quota information about the version.
     *
     * @example {}
     *
     * @var quota
     */
    public $quota;

    /**
     * @description The application schema.
     *
     * @example {}
     *
     * @var mixed[]
     */
    public $schema;

    /**
     * @description The status of the version. Valid values:
     *
     *   ok
     *   stopped
     *   frozen
     *   initializing
     *   unavailable
     *   data_waiting
     *   data_preparing
     *
     * @example ok
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the application. Valid values:
     *
     *   standard: a standard application.
     *   advance: an advanced application which is of an old application type. New applications cannot be of this type.
     *   enhanced: an advanced application which is of a new application type.
     *
     * @example enhanced
     *
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
