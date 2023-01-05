<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryPictureSearchAppsResponseBody\data;

use AlibabaCloud\Tea\Model;

class pageData extends Model
{
    /**
     * @example 3e429560124b44b685095df81a27****
     *
     * @var string
     */
    public $appInstanceId;

    /**
     * @example 7b50e7acb2574a789226099300cc****
     *
     * @var string
     */
    public $appTemplateId;

    /**
     * @example 1614327915000
     *
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 1614328081000
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'appInstanceId' => 'AppInstanceId',
        'appTemplateId' => 'AppTemplateId',
        'createTime'    => 'CreateTime',
        'description'   => 'Description',
        'modifiedTime'  => 'ModifiedTime',
        'name'          => 'Name',
        'version'       => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceId) {
            $res['AppInstanceId'] = $this->appInstanceId;
        }
        if (null !== $this->appTemplateId) {
            $res['AppTemplateId'] = $this->appTemplateId;
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceId'])) {
            $model->appInstanceId = $map['AppInstanceId'];
        }
        if (isset($map['AppTemplateId'])) {
            $model->appTemplateId = $map['AppTemplateId'];
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
