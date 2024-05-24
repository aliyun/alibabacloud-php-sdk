<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class ResourceDetail extends Model
{
    /**
     * @example alicloud_fc_trigger.cn-shanghai-fc-stable-diffusion-sd
     *
     * @var string
     */
    public $address;

    /**
     * @example {"config":"{\"methods\":[\"GET\",\"POST\",\"PUT\",\"DELETE\"],\"authType\":\"anonymous\",\"disableURLInternet\":true}","config_mns":null,"function":"sd","id":"fc-stable-diffusion:sd:defaultTrigger","last_modified":"2024-04-17T13:20:53Z","name":"defaultTrigger","name_prefix":null,"role":"","service":"fc-stable-diffusion","source_arn":"","trigger_id":"mock-trigger","type":"http"}
     *
     * @var mixed[]
     */
    public $attributeValues;

    /**
     * @example managed
     *
     * @var string
     */
    public $mode;

    /**
     * @example cn-shanghai-fc-stable-diffusion-sd
     *
     * @var string
     */
    public $name;

    /**
     * @example alicloud_fc_trigger
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'address'         => 'address',
        'attributeValues' => 'attributeValues',
        'mode'            => 'mode',
        'name'            => 'name',
        'type'            => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }
        if (null !== $this->attributeValues) {
            $res['attributeValues'] = $this->attributeValues;
        }
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResourceDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['address'])) {
            $model->address = $map['address'];
        }
        if (isset($map['attributeValues'])) {
            $model->attributeValues = $map['attributeValues'];
        }
        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
