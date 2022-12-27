<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemRecordResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemRecordResponseBody\workitemTime\recordUser;
use AlibabaCloud\Tea\Model;

class workitemTime extends Model
{
    /**
     * @example 12
     *
     * @var int
     */
    public $actualTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 1667205617089
     *
     * @var int
     */
    public $gmtEnd;

    /**
     * @example 1667205617061
     *
     * @var int
     */
    public $gmtStart;

    /**
     * @example deafe5f33xxxxx6a259d8dafd
     *
     * @var string
     */
    public $identifier;

    /**
     * @var recordUser
     */
    public $recordUser;

    /**
     * @example deafe5f33xxxxx6a259d8dafd
     *
     * @var string
     */
    public $type;

    /**
     * @example 9144ef6b72d8exxxxx9e61a4d0
     *
     * @var string
     */
    public $workitemIdentifier;
    protected $_name = [
        'actualTime'         => 'actualTime',
        'description'        => 'description',
        'gmtEnd'             => 'gmtEnd',
        'gmtStart'           => 'gmtStart',
        'identifier'         => 'identifier',
        'recordUser'         => 'recordUser',
        'type'               => 'type',
        'workitemIdentifier' => 'workitemIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualTime) {
            $res['actualTime'] = $this->actualTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->gmtEnd) {
            $res['gmtEnd'] = $this->gmtEnd;
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
     * @return workitemTime
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['actualTime'])) {
            $model->actualTime = $map['actualTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['gmtEnd'])) {
            $model->gmtEnd = $map['gmtEnd'];
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['workitemIdentifier'])) {
            $model->workitemIdentifier = $map['workitemIdentifier'];
        }

        return $model;
    }
}
