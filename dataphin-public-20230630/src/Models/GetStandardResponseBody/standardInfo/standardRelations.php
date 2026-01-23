<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardResponseBody\standardInfo;

use AlibabaCloud\Dara\Model;

class standardRelations extends Model
{
    /**
     * @var string
     */
    public $relationType;

    /**
     * @var int
     */
    public $standardId;

    /**
     * @var string
     */
    public $standardStage;

    /**
     * @var string
     */
    public $standardStatus;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'relationType' => 'RelationType',
        'standardId' => 'StandardId',
        'standardStage' => 'StandardStage',
        'standardStatus' => 'StandardStatus',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }

        if (null !== $this->standardId) {
            $res['StandardId'] = $this->standardId;
        }

        if (null !== $this->standardStage) {
            $res['StandardStage'] = $this->standardStage;
        }

        if (null !== $this->standardStatus) {
            $res['StandardStatus'] = $this->standardStatus;
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
        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }

        if (isset($map['StandardId'])) {
            $model->standardId = $map['StandardId'];
        }

        if (isset($map['StandardStage'])) {
            $model->standardStage = $map['StandardStage'];
        }

        if (isset($map['StandardStatus'])) {
            $model->standardStatus = $map['StandardStatus'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
