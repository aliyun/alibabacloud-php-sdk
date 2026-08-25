<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\ContainerConfiguration\registryCredential;

class ContainerConfiguration extends Model
{
    /**
     * @var string
     */
    public $acrInstanceId;

    /**
     * @var string
     */
    public $image;

    /**
     * @var registryCredential
     */
    public $registryCredential;
    protected $_name = [
        'acrInstanceId' => 'acrInstanceId',
        'image' => 'image',
        'registryCredential' => 'registryCredential',
    ];

    public function validate()
    {
        if (null !== $this->registryCredential) {
            $this->registryCredential->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acrInstanceId) {
            $res['acrInstanceId'] = $this->acrInstanceId;
        }

        if (null !== $this->image) {
            $res['image'] = $this->image;
        }

        if (null !== $this->registryCredential) {
            $res['registryCredential'] = null !== $this->registryCredential ? $this->registryCredential->toArray($noStream) : $this->registryCredential;
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
        if (isset($map['acrInstanceId'])) {
            $model->acrInstanceId = $map['acrInstanceId'];
        }

        if (isset($map['image'])) {
            $model->image = $map['image'];
        }

        if (isset($map['registryCredential'])) {
            $model->registryCredential = registryCredential::fromMap($map['registryCredential']);
        }

        return $model;
    }
}
