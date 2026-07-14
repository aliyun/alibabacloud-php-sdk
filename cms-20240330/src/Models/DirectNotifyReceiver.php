<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class DirectNotifyReceiver extends Model
{
    /**
     * @var string[]
     */
    public $channels;

    /**
     * @var string[]
     */
    public $identifiers;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'channels' => 'channels',
        'identifiers' => 'identifiers',
        'targetType' => 'targetType',
    ];

    public function validate()
    {
        if (\is_array($this->channels)) {
            Model::validateArray($this->channels);
        }
        if (\is_array($this->identifiers)) {
            Model::validateArray($this->identifiers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channels) {
            if (\is_array($this->channels)) {
                $res['channels'] = [];
                $n1 = 0;
                foreach ($this->channels as $item1) {
                    $res['channels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->identifiers) {
            if (\is_array($this->identifiers)) {
                $res['identifiers'] = [];
                $n1 = 0;
                foreach ($this->identifiers as $item1) {
                    $res['identifiers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->targetType) {
            $res['targetType'] = $this->targetType;
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
        if (isset($map['channels'])) {
            if (!empty($map['channels'])) {
                $model->channels = [];
                $n1 = 0;
                foreach ($map['channels'] as $item1) {
                    $model->channels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['identifiers'])) {
            if (!empty($map['identifiers'])) {
                $model->identifiers = [];
                $n1 = 0;
                foreach ($map['identifiers'] as $item1) {
                    $model->identifiers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['targetType'])) {
            $model->targetType = $map['targetType'];
        }

        return $model;
    }
}
