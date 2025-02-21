<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Dara\Model;

class ModifyDedicatedBlockStorageClusterAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $dbscId;
    /**
     * @var string
     */
    public $dbscName;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dbscId'      => 'DbscId',
        'dbscName'    => 'DbscName',
        'description' => 'Description',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dbscId) {
            $res['DbscId'] = $this->dbscId;
        }

        if (null !== $this->dbscName) {
            $res['DbscName'] = $this->dbscName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (isset($map['DbscId'])) {
            $model->dbscId = $map['DbscId'];
        }

        if (isset($map['DbscName'])) {
            $model->dbscName = $map['DbscName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
