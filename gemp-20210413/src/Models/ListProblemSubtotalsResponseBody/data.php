<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemSubtotalsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $createRamName;

    /**
     * @example 2020-10-02 00:00:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 123123
     *
     * @var int
     */
    public $createUserId;

    /**
     * @example 130****11111
     *
     * @var string
     */
    public $createUserPhone;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'createRamName'   => 'createRamName',
        'createTime'      => 'createTime',
        'createUserId'    => 'createUserId',
        'createUserPhone' => 'createUserPhone',
        'description'     => 'description',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createRamName) {
            $res['createRamName'] = $this->createRamName;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->createUserId) {
            $res['createUserId'] = $this->createUserId;
        }
        if (null !== $this->createUserPhone) {
            $res['createUserPhone'] = $this->createUserPhone;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createRamName'])) {
            $model->createRamName = $map['createRamName'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['createUserId'])) {
            $model->createUserId = $map['createUserId'];
        }
        if (isset($map['createUserPhone'])) {
            $model->createUserPhone = $map['createUserPhone'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        return $model;
    }
}
