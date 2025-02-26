<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class UpdateAliasInput extends Model
{
    /**
     * @var float[]
     */
    public $additionalVersionWeight;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'additionalVersionWeight' => 'additionalVersionWeight',
        'description'             => 'description',
        'versionId'               => 'versionId',
    ];

    public function validate()
    {
        if (\is_array($this->additionalVersionWeight)) {
            Model::validateArray($this->additionalVersionWeight);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->additionalVersionWeight) {
            if (\is_array($this->additionalVersionWeight)) {
                $res['additionalVersionWeight'] = [];
                foreach ($this->additionalVersionWeight as $key1 => $value1) {
                    $res['additionalVersionWeight'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->versionId) {
            $res['versionId'] = $this->versionId;
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
        if (isset($map['additionalVersionWeight'])) {
            if (!empty($map['additionalVersionWeight'])) {
                $model->additionalVersionWeight = [];
                foreach ($map['additionalVersionWeight'] as $key1 => $value1) {
                    $model->additionalVersionWeight[$key1] = $value1;
                }
            }
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['versionId'])) {
            $model->versionId = $map['versionId'];
        }

        return $model;
    }
}
