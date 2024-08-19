<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class UpdateImageLibRequest extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @example 0
     *
     * @var int
     */
    public $freeInspection;

    /**
     * @example custom_xxxx
     *
     * @var string
     */
    public $libId;

    /**
     * @var string
     */
    public $libName;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'comment'        => 'Comment',
        'freeInspection' => 'FreeInspection',
        'libId'          => 'LibId',
        'libName'        => 'LibName',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->freeInspection) {
            $res['FreeInspection'] = $this->freeInspection;
        }
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

    /**
     * @param array $map
     *
     * @return UpdateImageLibRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['FreeInspection'])) {
            $model->freeInspection = $map['FreeInspection'];
        }
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
