<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;

class CreateRegistryNamespaceRequest extends Model
{
    /**
     * @var string
     */
    public $acl;

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
    public $maintainer;

    /**
     * @var string
     */
    public $namespaceName;
    protected $_name = [
        'acl' => 'acl',
        'clientToken' => 'clientToken',
        'description' => 'description',
        'maintainer' => 'maintainer',
        'namespaceName' => 'namespaceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acl) {
            $res['acl'] = $this->acl;
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->maintainer) {
            $res['maintainer'] = $this->maintainer;
        }

        if (null !== $this->namespaceName) {
            $res['namespaceName'] = $this->namespaceName;
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
        if (isset($map['acl'])) {
            $model->acl = $map['acl'];
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['maintainer'])) {
            $model->maintainer = $map['maintainer'];
        }

        if (isset($map['namespaceName'])) {
            $model->namespaceName = $map['namespaceName'];
        }

        return $model;
    }
}
