<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;

class UpdateStackRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

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
    public $ramRole;

    /**
     * @var string
     */
    public $sourcePath;

    /**
     * @var string
     */
    public $workingDirectory;
    protected $_name = [
        'clientToken' => 'clientToken',
        'description' => 'description',
        'name' => 'name',
        'ramRole' => 'ramRole',
        'sourcePath' => 'sourcePath',
        'workingDirectory' => 'workingDirectory',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->ramRole) {
            $res['ramRole'] = $this->ramRole;
        }

        if (null !== $this->sourcePath) {
            $res['sourcePath'] = $this->sourcePath;
        }

        if (null !== $this->workingDirectory) {
            $res['workingDirectory'] = $this->workingDirectory;
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
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['ramRole'])) {
            $model->ramRole = $map['ramRole'];
        }

        if (isset($map['sourcePath'])) {
            $model->sourcePath = $map['sourcePath'];
        }

        if (isset($map['workingDirectory'])) {
            $model->workingDirectory = $map['workingDirectory'];
        }

        return $model;
    }
}
