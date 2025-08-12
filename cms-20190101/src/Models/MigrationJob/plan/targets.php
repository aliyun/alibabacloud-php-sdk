<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan\targets\httpRequestTarget;

class targets extends Model
{
    /**
     * @var string
     */
    public $arn;

    /**
     * @var httpRequestTarget
     */
    public $httpRequestTarget;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'arn' => 'Arn',
        'httpRequestTarget' => 'HttpRequestTarget',
        'name' => 'Name',
        'type' => 'Type',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        if (null !== $this->httpRequestTarget) {
            $this->httpRequestTarget->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }

        if (null !== $this->httpRequestTarget) {
            $res['HttpRequestTarget'] = null !== $this->httpRequestTarget ? $this->httpRequestTarget->toArray($noStream) : $this->httpRequestTarget;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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

        if (isset($map['HttpRequestTarget'])) {
            $model->httpRequestTarget = httpRequestTarget::fromMap($map['HttpRequestTarget']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
