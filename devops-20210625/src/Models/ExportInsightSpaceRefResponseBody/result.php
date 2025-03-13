<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightSpaceRefResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 65659358c319d2a0f912xxxx
     *
     * @var string
     */
    public $creatorId;

    /**
     * @example 7bc2be989727d0d4c9801fxxxx
     *
     * @var string
     */
    public $fromId;

    /**
     * @example 1704267849000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1704267849000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example 356525
     *
     * @var int
     */
    public $id;

    /**
     * @example 49565
     *
     * @var string
     */
    public $identifier;

    /**
     * @example N
     *
     * @var string
     */
    public $isDeleted;

    /**
     * @example 65659358c319d2a0f912xxxx
     *
     * @var string
     */
    public $modifierId;

    /**
     * @example 61db9af2148974246bexxxx
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example 732026500a48d7a74f8b43xxxx
     *
     * @var string
     */
    public $toId;

    /**
     * @example ASSOCIATED
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'creatorId'      => 'creatorId',
        'fromId'         => 'fromId',
        'gmtCreate'      => 'gmtCreate',
        'gmtModified'    => 'gmtModified',
        'id'             => 'id',
        'identifier'     => 'identifier',
        'isDeleted'      => 'isDeleted',
        'modifierId'     => 'modifierId',
        'organizationId' => 'organizationId',
        'toId'           => 'toId',
        'type'           => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creatorId) {
            $res['creatorId'] = $this->creatorId;
        }
        if (null !== $this->fromId) {
            $res['fromId'] = $this->fromId;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->isDeleted) {
            $res['isDeleted'] = $this->isDeleted;
        }
        if (null !== $this->modifierId) {
            $res['modifierId'] = $this->modifierId;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }
        if (null !== $this->toId) {
            $res['toId'] = $this->toId;
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
        if (isset($map['creatorId'])) {
            $model->creatorId = $map['creatorId'];
        }
        if (isset($map['fromId'])) {
            $model->fromId = $map['fromId'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['isDeleted'])) {
            $model->isDeleted = $map['isDeleted'];
        }
        if (isset($map['modifierId'])) {
            $model->modifierId = $map['modifierId'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }
        if (isset($map['toId'])) {
            $model->toId = $map['toId'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
