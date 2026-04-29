<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\CreatePolarClawAgentResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreatePolarClawAgentResponseBody\agent\identity;

class agent extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var identity
     */
    public $identity;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'id' => 'Id',
        'identity' => 'Identity',
        'name' => 'Name',
        'workspace' => 'Workspace',
    ];

    public function validate()
    {
        if (null !== $this->identity) {
            $this->identity->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->identity) {
            $res['Identity'] = null !== $this->identity ? $this->identity->toArray($noStream) : $this->identity;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Identity'])) {
            $model->identity = identity::fromMap($map['Identity']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}
