<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624\Models\CreateEaiEciRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eais\V20190624\Models\CreateEaiEciRequest\eci\container;

class eci extends Model
{
    /**
     * @var container
     */
    public $container;

    /**
     * @var string
     */
    public $eipId;

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
    public $volume;
    protected $_name = [
        'container' => 'Container',
        'eipId' => 'EipId',
        'name' => 'Name',
        'type' => 'Type',
        'volume' => 'Volume',
    ];

    public function validate()
    {
        if (null !== $this->container) {
            $this->container->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->container) {
            $res['Container'] = null !== $this->container ? $this->container->toArray($noStream) : $this->container;
        }

        if (null !== $this->eipId) {
            $res['EipId'] = $this->eipId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
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
        if (isset($map['Container'])) {
            $model->container = container::fromMap($map['Container']);
        }

        if (isset($map['EipId'])) {
            $model->eipId = $map['EipId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}
