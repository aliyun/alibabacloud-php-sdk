<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeErrorLogRecordsResponseBody\items;

use AlibabaCloud\Dara\Model;

class logRecords extends Model
{
    /**
     * @var string
     */
    public $category;
    /**
     * @var string
     */
    public $connInfo;
    /**
     * @var string
     */
    public $content;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'category'   => 'Category',
        'connInfo'   => 'ConnInfo',
        'content'    => 'Content',
        'createTime' => 'CreateTime',
        'id'         => 'Id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->connInfo) {
            $res['ConnInfo'] = $this->connInfo;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['ConnInfo'])) {
            $model->connInfo = $map['ConnInfo'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
