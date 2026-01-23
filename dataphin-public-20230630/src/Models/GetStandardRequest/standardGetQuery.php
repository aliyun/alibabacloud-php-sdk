<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardRequest;

use AlibabaCloud\Dara\Model;

class standardGetQuery extends Model
{
    /**
     * @var bool
     */
    public $needRelation;

    /**
     * @var bool
     */
    public $nullable;

    /**
     * @var int
     */
    public $standardId;

    /**
     * @var string
     */
    public $standardStage;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'needRelation' => 'NeedRelation',
        'nullable' => 'Nullable',
        'standardId' => 'StandardId',
        'standardStage' => 'StandardStage',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->needRelation) {
            $res['NeedRelation'] = $this->needRelation;
        }

        if (null !== $this->nullable) {
            $res['Nullable'] = $this->nullable;
        }

        if (null !== $this->standardId) {
            $res['StandardId'] = $this->standardId;
        }

        if (null !== $this->standardStage) {
            $res['StandardStage'] = $this->standardStage;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['NeedRelation'])) {
            $model->needRelation = $map['NeedRelation'];
        }

        if (isset($map['Nullable'])) {
            $model->nullable = $map['Nullable'];
        }

        if (isset($map['StandardId'])) {
            $model->standardId = $map['StandardId'];
        }

        if (isset($map['StandardStage'])) {
            $model->standardStage = $map['StandardStage'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
