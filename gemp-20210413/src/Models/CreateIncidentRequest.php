<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class CreateIncidentRequest extends Model
{
    /**
     * @example 12312
     *
     * @var int
     */
    public $assignUserId;

    /**
     * @var string[]
     */
    public $channels;

    /**
     * @example 2b63cdef-7ac3-4892-a76d-0f3389ef729f
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example LOW
     *
     * @var string
     */
    public $effect;

    /**
     * @var string
     */
    public $incidentDescription;

    /**
     * @example P1
     *
     * @var string
     */
    public $incidentLevel;

    /**
     * @var string
     */
    public $incidentTitle;

    /**
     * @example 12312
     *
     * @var int
     */
    public $relatedServiceId;

    /**
     * @description 12000
     *
     * @example 12312
     *
     * @var int
     */
    public $serviceGroupId;
    protected $_name = [
        'assignUserId'        => 'assignUserId',
        'channels'            => 'channels',
        'clientToken'         => 'clientToken',
        'effect'              => 'effect',
        'incidentDescription' => 'incidentDescription',
        'incidentLevel'       => 'incidentLevel',
        'incidentTitle'       => 'incidentTitle',
        'relatedServiceId'    => 'relatedServiceId',
        'serviceGroupId'      => 'serviceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignUserId) {
            $res['assignUserId'] = $this->assignUserId;
        }
        if (null !== $this->channels) {
            $res['channels'] = $this->channels;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->effect) {
            $res['effect'] = $this->effect;
        }
        if (null !== $this->incidentDescription) {
            $res['incidentDescription'] = $this->incidentDescription;
        }
        if (null !== $this->incidentLevel) {
            $res['incidentLevel'] = $this->incidentLevel;
        }
        if (null !== $this->incidentTitle) {
            $res['incidentTitle'] = $this->incidentTitle;
        }
        if (null !== $this->relatedServiceId) {
            $res['relatedServiceId'] = $this->relatedServiceId;
        }
        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIncidentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['assignUserId'])) {
            $model->assignUserId = $map['assignUserId'];
        }
        if (isset($map['channels'])) {
            if (!empty($map['channels'])) {
                $model->channels = $map['channels'];
            }
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['effect'])) {
            $model->effect = $map['effect'];
        }
        if (isset($map['incidentDescription'])) {
            $model->incidentDescription = $map['incidentDescription'];
        }
        if (isset($map['incidentLevel'])) {
            $model->incidentLevel = $map['incidentLevel'];
        }
        if (isset($map['incidentTitle'])) {
            $model->incidentTitle = $map['incidentTitle'];
        }
        if (isset($map['relatedServiceId'])) {
            $model->relatedServiceId = $map['relatedServiceId'];
        }
        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
        }

        return $model;
    }
}
