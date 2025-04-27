<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;

class DiagnoseInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string[]
     */
    public $diagnoseItems;

    /**
     * @var string[]
     */
    public $indices;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $lang;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'diagnoseItems' => 'diagnoseItems',
        'indices' => 'indices',
        'type' => 'type',
        'lang' => 'lang',
    ];

    public function validate()
    {
        if (\is_array($this->diagnoseItems)) {
            Model::validateArray($this->diagnoseItems);
        }
        if (\is_array($this->indices)) {
            Model::validateArray($this->indices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->diagnoseItems) {
            if (\is_array($this->diagnoseItems)) {
                $res['diagnoseItems'] = [];
                $n1 = 0;
                foreach ($this->diagnoseItems as $item1) {
                    $res['diagnoseItems'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->indices) {
            if (\is_array($this->indices)) {
                $res['indices'] = [];
                $n1 = 0;
                foreach ($this->indices as $item1) {
                    $res['indices'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->lang) {
            $res['lang'] = $this->lang;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['diagnoseItems'])) {
            if (!empty($map['diagnoseItems'])) {
                $model->diagnoseItems = [];
                $n1 = 0;
                foreach ($map['diagnoseItems'] as $item1) {
                    $model->diagnoseItems[$n1++] = $item1;
                }
            }
        }

        if (isset($map['indices'])) {
            if (!empty($map['indices'])) {
                $model->indices = [];
                $n1 = 0;
                foreach ($map['indices'] as $item1) {
                    $model->indices[$n1++] = $item1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['lang'])) {
            $model->lang = $map['lang'];
        }

        return $model;
    }
}
