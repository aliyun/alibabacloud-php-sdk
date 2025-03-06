<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624\Models\CreateEaiEciRequest;

use AlibabaCloud\SDK\Eais\V20190624\Models\CreateEaiEciRequest\eci\container;
use AlibabaCloud\Tea\Model;

class eci extends Model
{
    /**
     * @var container
     */
    public $container;

    /**
     * @example eip-uf66jeqopgqa9hdn****
     *
     * @var string
     */
    public $eipId;

    /**
     * @example test-nginx
     *
     * @var string
     */
    public $name;

    /**
     * @example ecs.c5.xlarge
     *
     * @var string
     */
    public $type;

    /**
     * @example 00c7****-rivj.cn-hangzhou.extreme.nas.aliyuncs.com:/share
     *
     * @var string
     */
    public $volume;
    protected $_name = [
        'container' => 'Container',
        'eipId'     => 'EipId',
        'name'      => 'Name',
        'type'      => 'Type',
        'volume'    => 'Volume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->container) {
            $res['Container'] = null !== $this->container ? $this->container->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return eci
     */
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
