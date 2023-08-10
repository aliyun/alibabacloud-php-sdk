<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ABTestExperiment extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $online;

    /**
     * @var string[]
     */
    public $params;

    /**
     * @var int
     */
    public $serialNumber;

    /**
     * @var int
     */
    public $traffic;
    protected $_name = [
        'name'         => 'name',
        'online'       => 'online',
        'params'       => 'params',
        'serialNumber' => 'serialNumber',
        'traffic'      => 'traffic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->online) {
            $res['online'] = $this->online;
        }
        if (null !== $this->params) {
            $res['params'] = $this->params;
        }
        if (null !== $this->serialNumber) {
            $res['serialNumber'] = $this->serialNumber;
        }
        if (null !== $this->traffic) {
            $res['traffic'] = $this->traffic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ABTestExperiment
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['online'])) {
            $model->online = $map['online'];
        }
        if (isset($map['params'])) {
            $model->params = $map['params'];
        }
        if (isset($map['serialNumber'])) {
            $model->serialNumber = $map['serialNumber'];
        }
        if (isset($map['traffic'])) {
            $model->traffic = $map['traffic'];
        }

        return $model;
    }
}
