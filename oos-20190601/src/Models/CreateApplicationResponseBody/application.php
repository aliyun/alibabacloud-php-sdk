<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\CreateApplicationResponseBody;

use AlibabaCloud\Tea\Model;

class application extends Model
{
    /**
     * @description The time when the application was created.
     *
     * @example 2021-09-07T09:17:46Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The description of the application.
     *
     * @example application
     *
     * @var string
     */
    public $description;

    /**
     * @description The application name.
     *
     * @example Myapplication
     *
     * @var string
     */
    public $name;

    /**
     * @description The tags.
     *
     * @example {"k1":"v1","k2":"v2"}
     *
     * @var string[]
     */
    public $tags;

    /**
     * @description The time when the application was updated.
     *
     * @example 2021-09-07T09:17:46Z
     *
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'createDate'  => 'CreateDate',
        'description' => 'Description',
        'name'        => 'Name',
        'tags'        => 'Tags',
        'updateDate'  => 'UpdateDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return application
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }

        return $model;
    }
}
