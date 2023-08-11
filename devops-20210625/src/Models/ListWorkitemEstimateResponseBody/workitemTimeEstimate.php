<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkitemEstimateResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkitemEstimateResponseBody\workitemTimeEstimate\recordUser;
use AlibabaCloud\Tea\Model;

class workitemTimeEstimate extends Model
{
    /**
     * @example 开发代码等
     *
     * @var string
     */
    public $description;

    /**
     * @example 1653235200000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1653235200000
     *
     * @var int
     */
    public $gmtEnd;

    /**
     * @example 1653235200000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example 1653235200000
     *
     * @var int
     */
    public $gmtStart;

    /**
     * @example a4ac3a81e90217db32b7......
     *
     * @var string
     */
    public $identifier;

    /**
     * @var recordUser
     */
    public $recordUser;

    /**
     * @example 8
     *
     * @var float
     */
    public $spentTime;

    /**
     * @example 研发
     *
     * @var string
     */
    public $type;

    /**
     * @example 5daa9a15c7fd55523996......
     *
     * @var string
     */
    public $workitemIdentifier;
    protected $_name = [
        'description'        => 'description',
        'gmtCreate'          => 'gmtCreate',
        'gmtEnd'             => 'gmtEnd',
        'gmtModified'        => 'gmtModified',
        'gmtStart'           => 'gmtStart',
        'identifier'         => 'identifier',
        'recordUser'         => 'recordUser',
        'spentTime'          => 'spentTime',
        'type'               => 'type',
        'workitemIdentifier' => 'workitemIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtEnd) {
            $res['gmtEnd'] = $this->gmtEnd;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->gmtStart) {
            $res['gmtStart'] = $this->gmtStart;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->recordUser) {
            $res['recordUser'] = null !== $this->recordUser ? $this->recordUser->toMap() : null;
        }
        if (null !== $this->spentTime) {
            $res['spentTime'] = $this->spentTime;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->workitemIdentifier) {
            $res['workitemIdentifier'] = $this->workitemIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workitemTimeEstimate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtEnd'])) {
            $model->gmtEnd = $map['gmtEnd'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['gmtStart'])) {
            $model->gmtStart = $map['gmtStart'];
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['recordUser'])) {
            $model->recordUser = recordUser::fromMap($map['recordUser']);
        }
        if (isset($map['spentTime'])) {
            $model->spentTime = $map['spentTime'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['workitemIdentifier'])) {
            $model->workitemIdentifier = $map['workitemIdentifier'];
        }

        return $model;
    }
}
