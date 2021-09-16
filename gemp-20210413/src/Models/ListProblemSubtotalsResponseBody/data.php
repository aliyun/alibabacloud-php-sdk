<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemSubtotalsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 操作人
     *
     * @var string
     */
    public $createRamName;

    /**
     * @description 操作人手机号
     *
     * @var string
     */
    public $createUserPhone;
    protected $_name = [
        'description'     => 'description',
        'createTime'      => 'createTime',
        'createRamName'   => 'createRamName',
        'createUserPhone' => 'createUserPhone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->createRamName) {
            $res['createRamName'] = $this->createRamName;
        }
        if (null !== $this->createUserPhone) {
            $res['createUserPhone'] = $this->createUserPhone;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['createRamName'])) {
            $model->createRamName = $map['createRamName'];
        }
        if (isset($map['createUserPhone'])) {
            $model->createUserPhone = $map['createUserPhone'];
        }

        return $model;
    }
}
