<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListCmsInstancesResponseBody\data;

use AlibabaCloud\Tea\Model;

class products extends Model
{
    /**
     * @example -
     *
     * @var string
     */
    public $descr;

    /**
     * @example 20210
     *
     * @var string
     */
    public $id;

    /**
     * @example cloudserver
     *
     * @var string
     */
    public $instance;

    /**
     * @example hologres
     *
     * @var string
     */
    public $name;

    /**
     * @example face
     *
     * @var string
     */
    public $prod;

    /**
     * @example arms
     *
     * @var string
     */
    public $source;

    /**
     * @example true
     *
     * @var string
     */
    public $state;

    /**
     * @example 1647852021000
     *
     * @var string
     */
    public $time;

    /**
     * @example HOLOGRES
     *
     * @var string
     */
    public $type;

    /**
     * @example https://g.console.aliyun.com/d/1098370038733503-35894-565/cms-hologres?orgId\u003d9\u0026refresh\u003d60s
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'descr'    => 'Descr',
        'id'       => 'Id',
        'instance' => 'Instance',
        'name'     => 'Name',
        'prod'     => 'Prod',
        'source'   => 'Source',
        'state'    => 'State',
        'time'     => 'Time',
        'type'     => 'Type',
        'url'      => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->descr) {
            $res['Descr'] = $this->descr;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instance) {
            $res['Instance'] = $this->instance;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->prod) {
            $res['Prod'] = $this->prod;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return products
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Descr'])) {
            $model->descr = $map['Descr'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Instance'])) {
            $model->instance = $map['Instance'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Prod'])) {
            $model->prod = $map['Prod'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
