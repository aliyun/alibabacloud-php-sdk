<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;

class NodeSpec extends Model
{
    /**
     * @var int
     */
    public $disk;

    /**
     * @var bool
     */
    public $diskEncryption;

    /**
     * @var string
     */
    public $diskPreference;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var string
     */
    public $performanceLevel;

    /**
     * @var string
     */
    public $spec;
    protected $_name = [
        'disk' => 'disk',
        'diskEncryption' => 'diskEncryption',
        'diskPreference' => 'diskPreference',
        'diskType' => 'diskType',
        'performanceLevel' => 'performanceLevel',
        'spec' => 'spec',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disk) {
            $res['disk'] = $this->disk;
        }

        if (null !== $this->diskEncryption) {
            $res['diskEncryption'] = $this->diskEncryption;
        }

        if (null !== $this->diskPreference) {
            $res['diskPreference'] = $this->diskPreference;
        }

        if (null !== $this->diskType) {
            $res['diskType'] = $this->diskType;
        }

        if (null !== $this->performanceLevel) {
            $res['performanceLevel'] = $this->performanceLevel;
        }

        if (null !== $this->spec) {
            $res['spec'] = $this->spec;
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
        if (isset($map['disk'])) {
            $model->disk = $map['disk'];
        }

        if (isset($map['diskEncryption'])) {
            $model->diskEncryption = $map['diskEncryption'];
        }

        if (isset($map['diskPreference'])) {
            $model->diskPreference = $map['diskPreference'];
        }

        if (isset($map['diskType'])) {
            $model->diskType = $map['diskType'];
        }

        if (isset($map['performanceLevel'])) {
            $model->performanceLevel = $map['performanceLevel'];
        }

        if (isset($map['spec'])) {
            $model->spec = $map['spec'];
        }

        return $model;
    }
}
