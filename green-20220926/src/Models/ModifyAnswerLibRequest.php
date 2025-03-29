<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class ModifyAnswerLibRequest extends Model
{
    /**
     * @var string
     */
    public $libId;

    /**
     * @var string
     */
    public $libName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'libId' => 'LibId',
        'libName' => 'LibName',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->libId) {
            $res['LibId'] = $this->libId;
        }

        if (null !== $this->libName) {
            $res['LibName'] = $this->libName;
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
        if (isset($map['LibId'])) {
            $model->libId = $map['LibId'];
        }

        if (isset($map['LibName'])) {
            $model->libName = $map['LibName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
