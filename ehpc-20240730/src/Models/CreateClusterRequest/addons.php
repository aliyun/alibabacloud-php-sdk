<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\CreateClusterRequest;

use AlibabaCloud\Dara\Model;

class addons extends Model
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $resourcesSpec;
    /**
     * @var string
     */
    public $servicesSpec;
    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'name'          => 'Name',
        'resourcesSpec' => 'ResourcesSpec',
        'servicesSpec'  => 'ServicesSpec',
        'version'       => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->resourcesSpec) {
            $res['ResourcesSpec'] = $this->resourcesSpec;
        }

        if (null !== $this->servicesSpec) {
            $res['ServicesSpec'] = $this->servicesSpec;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ResourcesSpec'])) {
            $model->resourcesSpec = $map['ResourcesSpec'];
        }

        if (isset($map['ServicesSpec'])) {
            $model->servicesSpec = $map['ServicesSpec'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
