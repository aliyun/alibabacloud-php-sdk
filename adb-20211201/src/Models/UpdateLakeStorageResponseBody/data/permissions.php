<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\UpdateLakeStorageResponseBody\data;

use AlibabaCloud\Tea\Model;

class permissions extends Model
{
    /**
     * @description 具有该权限的账户或RAM用户ID
     *
     * @example test
     *
     * @var string
     */
    public $account;

    /**
     * @description 表示是否允许读取湖存储的权限
     *
     * @example true
     *
     * @var bool
     */
    public $read;

    /**
     * @description 指定权限的账户类型
     *
     * @example SUB
     *
     * @var string
     */
    public $type;

    /**
     * @description 表示是否允许向湖存储写入数据的权限
     *
     * @example false
     *
     * @var bool
     */
    public $write;
    protected $_name = [
        'account' => 'Account',
        'read'    => 'Read',
        'type'    => 'Type',
        'write'   => 'Write',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
        if (null !== $this->read) {
            $res['Read'] = $this->read;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->write) {
            $res['Write'] = $this->write;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return permissions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['Read'])) {
            $model->read = $map['Read'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Write'])) {
            $model->write = $map['Write'];
        }

        return $model;
    }
}
