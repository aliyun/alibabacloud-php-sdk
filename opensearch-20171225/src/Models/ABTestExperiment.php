<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Dara\Model;

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
        'name' => 'name',
        'online' => 'online',
        'params' => 'params',
        'serialNumber' => 'serialNumber',
        'traffic' => 'traffic',
    ];

    public function validate()
    {
        if (\is_array($this->params)) {
            Model::validateArray($this->params);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->online) {
            $res['online'] = $this->online;
        }

        if (null !== $this->params) {
            if (\is_array($this->params)) {
                $res['params'] = [];
                foreach ($this->params as $key1 => $value1) {
                    $res['params'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->serialNumber) {
            $res['serialNumber'] = $this->serialNumber;
        }

        if (null !== $this->traffic) {
            $res['traffic'] = $this->traffic;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['online'])) {
            $model->online = $map['online'];
        }

        if (isset($map['params'])) {
            if (!empty($map['params'])) {
                $model->params = [];
                foreach ($map['params'] as $key1 => $value1) {
                    $model->params[$key1] = $value1;
                }
            }
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
