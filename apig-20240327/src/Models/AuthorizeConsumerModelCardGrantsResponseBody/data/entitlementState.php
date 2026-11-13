<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\AuthorizeConsumerModelCardGrantsResponseBody\data;

use AlibabaCloud\Dara\Model;

class entitlementState extends Model
{
    /**
     * @var int
     */
    public $appliedRevision;

    /**
     * @var int
     */
    public $desiredRevision;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'appliedRevision' => 'appliedRevision',
        'desiredRevision' => 'desiredRevision',
        'errorMessage' => 'errorMessage',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appliedRevision) {
            $res['appliedRevision'] = $this->appliedRevision;
        }

        if (null !== $this->desiredRevision) {
            $res['desiredRevision'] = $this->desiredRevision;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['appliedRevision'])) {
            $model->appliedRevision = $map['appliedRevision'];
        }

        if (isset($map['desiredRevision'])) {
            $model->desiredRevision = $map['desiredRevision'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
