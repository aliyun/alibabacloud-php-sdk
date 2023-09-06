<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetEventResponseBody;

use AlibabaCloud\Tea\Model;

class attendees extends Model
{
    /**
     * @example jack
     *
     * @var string
     */
    public $displayName;

    /**
     * @example 123456
     *
     * @var string
     */
    public $id;

    /**
     * @example true
     *
     * @var bool
     */
    public $isOptional;

    /**
     * @example accepted
     *
     * @var string
     */
    public $responseStatus;

    /**
     * @example true
     *
     * @var bool
     */
    public $self;
    protected $_name = [
        'displayName'    => 'DisplayName',
        'id'             => 'Id',
        'isOptional'     => 'IsOptional',
        'responseStatus' => 'ResponseStatus',
        'self'           => 'Self',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isOptional) {
            $res['IsOptional'] = $this->isOptional;
        }
        if (null !== $this->responseStatus) {
            $res['ResponseStatus'] = $this->responseStatus;
        }
        if (null !== $this->self) {
            $res['Self'] = $this->self;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attendees
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsOptional'])) {
            $model->isOptional = $map['IsOptional'];
        }
        if (isset($map['ResponseStatus'])) {
            $model->responseStatus = $map['ResponseStatus'];
        }
        if (isset($map['Self'])) {
            $model->self = $map['Self'];
        }

        return $model;
    }
}
