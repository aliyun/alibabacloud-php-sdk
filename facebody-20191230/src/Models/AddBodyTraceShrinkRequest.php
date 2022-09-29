<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class AddBodyTraceShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $extraData;

    /**
     * @var string
     */
    public $imagesShrink;

    /**
     * @var int
     */
    public $personId;
    protected $_name = [
        'dbId'         => 'DbId',
        'extraData'    => 'ExtraData',
        'imagesShrink' => 'Images',
        'personId'     => 'PersonId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->extraData) {
            $res['ExtraData'] = $this->extraData;
        }
        if (null !== $this->imagesShrink) {
            $res['Images'] = $this->imagesShrink;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddBodyTraceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['ExtraData'])) {
            $model->extraData = $map['ExtraData'];
        }
        if (isset($map['Images'])) {
            $model->imagesShrink = $map['Images'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }

        return $model;
    }
}
