<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListIntegrationConfigTimelinesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 主题
     *
     * @var string
     */
    public $title;

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
    protected $_name = [
        'title'       => 'title',
        'description' => 'description',
        'createTime'  => 'createTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
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
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        return $model;
    }
}
