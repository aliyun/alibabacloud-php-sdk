<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models;

use AlibabaCloud\Dara\Model;

class CreateApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $businessUnitId;

    /**
     * @var int
     */
    public $concurrency;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nluAccessType;
    protected $_name = [
        'businessUnitId' => 'BusinessUnitId',
        'concurrency' => 'Concurrency',
        'description' => 'Description',
        'name' => 'Name',
        'nluAccessType' => 'NluAccessType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessUnitId) {
            $res['BusinessUnitId'] = $this->businessUnitId;
        }

        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nluAccessType) {
            $res['NluAccessType'] = $this->nluAccessType;
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
        if (isset($map['BusinessUnitId'])) {
            $model->businessUnitId = $map['BusinessUnitId'];
        }

        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NluAccessType'])) {
            $model->nluAccessType = $map['NluAccessType'];
        }

        return $model;
    }
}
