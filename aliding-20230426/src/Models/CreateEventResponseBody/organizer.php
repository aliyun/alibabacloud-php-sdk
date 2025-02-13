<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventResponseBody;

use AlibabaCloud\Dara\Model;

class organizer extends Model
{
    /**
     * @var string
     */
    public $displayName;
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $responseStatus;
    /**
     * @var bool
     */
    public $self;
    protected $_name = [
        'displayName'    => 'DisplayName',
        'id'             => 'Id',
        'responseStatus' => 'ResponseStatus',
        'self'           => 'Self',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->responseStatus) {
            $res['ResponseStatus'] = $this->responseStatus;
        }

        if (null !== $this->self) {
            $res['Self'] = $this->self;
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
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
