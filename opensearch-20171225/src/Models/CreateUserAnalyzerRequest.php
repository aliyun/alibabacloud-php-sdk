<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Dara\Model;

class CreateUserAnalyzerRequest extends Model
{
    /**
     * @var string
     */
    public $business;

    /**
     * @var string
     */
    public $businessAppGroupId;

    /**
     * @var string
     */
    public $businessType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'business' => 'business',
        'businessAppGroupId' => 'businessAppGroupId',
        'businessType' => 'businessType',
        'name' => 'name',
        'type' => 'type',
        'dryRun' => 'dryRun',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->business) {
            $res['business'] = $this->business;
        }

        if (null !== $this->businessAppGroupId) {
            $res['businessAppGroupId'] = $this->businessAppGroupId;
        }

        if (null !== $this->businessType) {
            $res['businessType'] = $this->businessType;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
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
        if (isset($map['business'])) {
            $model->business = $map['business'];
        }

        if (isset($map['businessAppGroupId'])) {
            $model->businessAppGroupId = $map['businessAppGroupId'];
        }

        if (isset($map['businessType'])) {
            $model->businessType = $map['businessType'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        return $model;
    }
}
