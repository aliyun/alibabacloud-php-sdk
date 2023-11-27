<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models;

use AlibabaCloud\Tea\Model;

class RequestParamsUserConversationsValue extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $top;

    /**
     * @example 0
     *
     * @var int
     */
    public $redPoint;

    /**
     * @example false
     *
     * @var bool
     */
    public $mute;

    /**
     * @example 1
     *
     * @var bool
     */
    public $visible;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string[]
     */
    public $userExtensions;
    protected $_name = [
        'top'            => 'Top',
        'redPoint'       => 'RedPoint',
        'mute'           => 'Mute',
        'visible'        => 'Visible',
        'createTime'     => 'CreateTime',
        'modifyTime'     => 'ModifyTime',
        'userExtensions' => 'UserExtensions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->top) {
            $res['Top'] = $this->top;
        }
        if (null !== $this->redPoint) {
            $res['RedPoint'] = $this->redPoint;
        }
        if (null !== $this->mute) {
            $res['Mute'] = $this->mute;
        }
        if (null !== $this->visible) {
            $res['Visible'] = $this->visible;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->userExtensions) {
            $res['UserExtensions'] = $this->userExtensions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RequestParamsUserConversationsValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Top'])) {
            $model->top = $map['Top'];
        }
        if (isset($map['RedPoint'])) {
            $model->redPoint = $map['RedPoint'];
        }
        if (isset($map['Mute'])) {
            $model->mute = $map['Mute'];
        }
        if (isset($map['Visible'])) {
            $model->visible = $map['Visible'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['UserExtensions'])) {
            $model->userExtensions = $map['UserExtensions'];
        }

        return $model;
    }
}
