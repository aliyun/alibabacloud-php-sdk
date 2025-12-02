<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class QueryCallbackRequest extends Model
{
    /**
     * @var bool
     */
    public $checkForOss;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'checkForOss' => 'CheckForOss',
        'id' => 'Id',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkForOss) {
            $res['CheckForOss'] = $this->checkForOss;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['CheckForOss'])) {
            $model->checkForOss = $map['CheckForOss'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
