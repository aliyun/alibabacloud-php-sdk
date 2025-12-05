<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class CreateApplicationAccessPointResponseBody extends Model
{
    /**
     * @var string
     */
    public $arn;

    /**
     * @var string
     */
    public $authenticationMethod;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $policies;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'arn' => 'Arn',
        'authenticationMethod' => 'AuthenticationMethod',
        'description' => 'Description',
        'name' => 'Name',
        'policies' => 'Policies',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }

        if (null !== $this->authenticationMethod) {
            $res['AuthenticationMethod'] = $this->authenticationMethod;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->policies) {
            $res['Policies'] = $this->policies;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }

        if (isset($map['AuthenticationMethod'])) {
            $model->authenticationMethod = $map['AuthenticationMethod'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Policies'])) {
            $model->policies = $map['Policies'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
