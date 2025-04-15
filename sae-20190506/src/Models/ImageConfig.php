<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class ImageConfig extends Model
{
    /**
     * @var string
     */
    public $accelerationType;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $instanceID;

    /**
     * @var RegistryConfig
     */
    public $registryConfig;
    protected $_name = [
        'accelerationType' => 'accelerationType',
        'image' => 'image',
        'instanceID' => 'instanceID',
        'registryConfig' => 'registryConfig',
    ];

    public function validate()
    {
        if (null !== $this->registryConfig) {
            $this->registryConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accelerationType) {
            $res['accelerationType'] = $this->accelerationType;
        }

        if (null !== $this->image) {
            $res['image'] = $this->image;
        }

        if (null !== $this->instanceID) {
            $res['instanceID'] = $this->instanceID;
        }

        if (null !== $this->registryConfig) {
            $res['registryConfig'] = null !== $this->registryConfig ? $this->registryConfig->toArray($noStream) : $this->registryConfig;
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
        if (isset($map['accelerationType'])) {
            $model->accelerationType = $map['accelerationType'];
        }

        if (isset($map['image'])) {
            $model->image = $map['image'];
        }

        if (isset($map['instanceID'])) {
            $model->instanceID = $map['instanceID'];
        }

        if (isset($map['registryConfig'])) {
            $model->registryConfig = RegistryConfig::fromMap($map['registryConfig']);
        }

        return $model;
    }
}
