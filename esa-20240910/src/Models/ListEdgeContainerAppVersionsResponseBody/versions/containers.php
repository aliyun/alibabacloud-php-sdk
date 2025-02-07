<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListEdgeContainerAppVersionsResponseBody\versions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListEdgeContainerAppVersionsResponseBody\versions\containers\probeContent;

class containers extends Model
{
    /**
     * @var string
     */
    public $args;
    /**
     * @var string
     */
    public $command;
    /**
     * @var string
     */
    public $envVariables;
    /**
     * @var string
     */
    public $image;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $postStart;
    /**
     * @var string
     */
    public $preStop;
    /**
     * @var probeContent
     */
    public $probeContent;
    /**
     * @var string
     */
    public $probeType;
    /**
     * @var string
     */
    public $spec;
    protected $_name = [
        'args'         => 'Args',
        'command'      => 'Command',
        'envVariables' => 'EnvVariables',
        'image'        => 'Image',
        'name'         => 'Name',
        'postStart'    => 'PostStart',
        'preStop'      => 'PreStop',
        'probeContent' => 'ProbeContent',
        'probeType'    => 'ProbeType',
        'spec'         => 'Spec',
    ];

    public function validate()
    {
        if (null !== $this->probeContent) {
            $this->probeContent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->args) {
            $res['Args'] = $this->args;
        }

        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }

        if (null !== $this->envVariables) {
            $res['EnvVariables'] = $this->envVariables;
        }

        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->postStart) {
            $res['PostStart'] = $this->postStart;
        }

        if (null !== $this->preStop) {
            $res['PreStop'] = $this->preStop;
        }

        if (null !== $this->probeContent) {
            $res['ProbeContent'] = null !== $this->probeContent ? $this->probeContent->toArray($noStream) : $this->probeContent;
        }

        if (null !== $this->probeType) {
            $res['ProbeType'] = $this->probeType;
        }

        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
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
        if (isset($map['Args'])) {
            $model->args = $map['Args'];
        }

        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }

        if (isset($map['EnvVariables'])) {
            $model->envVariables = $map['EnvVariables'];
        }

        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PostStart'])) {
            $model->postStart = $map['PostStart'];
        }

        if (isset($map['PreStop'])) {
            $model->preStop = $map['PreStop'];
        }

        if (isset($map['ProbeContent'])) {
            $model->probeContent = probeContent::fromMap($map['ProbeContent']);
        }

        if (isset($map['ProbeType'])) {
            $model->probeType = $map['ProbeType'];
        }

        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        return $model;
    }
}
