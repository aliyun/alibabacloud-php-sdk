<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\CreateDeliveryTaskRequest;

use AlibabaCloud\Dara\Model;

class sinkList extends Model
{
    /**
     * @var string[]
     */
    public $sinkConfigs;

    /**
     * @var string
     */
    public $sinkType;
    protected $_name = [
        'sinkConfigs' => 'sinkConfigs',
        'sinkType' => 'sinkType',
    ];

    public function validate()
    {
        if (\is_array($this->sinkConfigs)) {
            Model::validateArray($this->sinkConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sinkConfigs) {
            if (\is_array($this->sinkConfigs)) {
                $res['sinkConfigs'] = [];
                foreach ($this->sinkConfigs as $key1 => $value1) {
                    $res['sinkConfigs'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->sinkType) {
            $res['sinkType'] = $this->sinkType;
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
        if (isset($map['sinkConfigs'])) {
            if (!empty($map['sinkConfigs'])) {
                $model->sinkConfigs = [];
                foreach ($map['sinkConfigs'] as $key1 => $value1) {
                    $model->sinkConfigs[$key1] = $value1;
                }
            }
        }

        if (isset($map['sinkType'])) {
            $model->sinkType = $map['sinkType'];
        }

        return $model;
    }
}
