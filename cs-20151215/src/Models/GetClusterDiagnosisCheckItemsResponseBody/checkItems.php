<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\GetClusterDiagnosisCheckItemsResponseBody;

use AlibabaCloud\Tea\Model;

class checkItems extends Model
{
    /**
     * @example Check whether the node can access host dns service
     *
     * @var string
     */
    public $desc;

    /**
     * @example HostDNS
     *
     * @var string
     */
    public $display;

    /**
     * @example Node
     *
     * @var string
     */
    public $group;

    /**
     * @example normal
     *
     * @var string
     */
    public $level;

    /**
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @example HostDNS
     *
     * @var string
     */
    public $name;

    /**
     * @example True
     *
     * @var string
     */
    public $refer;

    /**
     * @example True
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'desc'    => 'desc',
        'display' => 'display',
        'group'   => 'group',
        'level'   => 'level',
        'message' => 'message',
        'name'    => 'name',
        'refer'   => 'refer',
        'value'   => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }
        if (null !== $this->display) {
            $res['display'] = $this->display;
        }
        if (null !== $this->group) {
            $res['group'] = $this->group;
        }
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->refer) {
            $res['refer'] = $this->refer;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }
        if (isset($map['display'])) {
            $model->display = $map['display'];
        }
        if (isset($map['group'])) {
            $model->group = $map['group'];
        }
        if (isset($map['level'])) {
            $model->level = $map['level'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['refer'])) {
            $model->refer = $map['refer'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
