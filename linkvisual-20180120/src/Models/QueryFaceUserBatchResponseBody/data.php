<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceUserBatchResponseBody;

use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceUserBatchResponseBody\data\facePicList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1636427314000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 1234567890
     *
     * @var string
     */
    public $customUserId;

    /**
     * @var facePicList[]
     */
    public $facePicList;

    /**
     * @example 1636436864000
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @example Tony
     *
     * @var string
     */
    public $name;

    /**
     * @example {"key1":"value1", "key2":"value2"}
     *
     * @var string
     */
    public $params;

    /**
     * @example 3mtjaqebeq4d****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'customUserId' => 'CustomUserId',
        'facePicList'  => 'FacePicList',
        'modifyTime'   => 'ModifyTime',
        'name'         => 'Name',
        'params'       => 'Params',
        'userId'       => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->customUserId) {
            $res['CustomUserId'] = $this->customUserId;
        }
        if (null !== $this->facePicList) {
            $res['FacePicList'] = [];
            if (null !== $this->facePicList && \is_array($this->facePicList)) {
                $n = 0;
                foreach ($this->facePicList as $item) {
                    $res['FacePicList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CustomUserId'])) {
            $model->customUserId = $map['CustomUserId'];
        }
        if (isset($map['FacePicList'])) {
            if (!empty($map['FacePicList'])) {
                $model->facePicList = [];
                $n                  = 0;
                foreach ($map['FacePicList'] as $item) {
                    $model->facePicList[$n++] = null !== $item ? facePicList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
