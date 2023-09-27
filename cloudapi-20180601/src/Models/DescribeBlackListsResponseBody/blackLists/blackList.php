<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeBlackListsResponseBody\blackLists;

use AlibabaCloud\Tea\Model;

class blackList extends Model
{
    /**
     * @var string
     */
    public $blackContent;

    /**
     * @var string
     */
    public $blackType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $modifiedTime;
    protected $_name = [
        'blackContent' => 'BlackContent',
        'blackType'    => 'BlackType',
        'createTime'   => 'CreateTime',
        'description'  => 'Description',
        'modifiedTime' => 'ModifiedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blackContent) {
            $res['BlackContent'] = $this->blackContent;
        }
        if (null !== $this->blackType) {
            $res['BlackType'] = $this->blackType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return blackList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlackContent'])) {
            $model->blackContent = $map['BlackContent'];
        }
        if (isset($map['BlackType'])) {
            $model->blackType = $map['BlackType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        return $model;
    }
}
