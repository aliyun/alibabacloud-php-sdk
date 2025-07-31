<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAdHocFileResponseBody;

use AlibabaCloud\Tea\Model;

class fileInfo extends Model
{
    /**
     * @example select 1;
     *
     * @var string
     */
    public $content;

    /**
     * @example 12121
     *
     * @var string
     */
    public $creator;

    /**
     * @example /xx1/xx2/
     *
     * @var string
     */
    public $directory;

    /**
     * @example 12121111
     *
     * @var int
     */
    public $id;

    /**
     * @example 12121
     *
     * @var string
     */
    public $lastModifier;

    /**
     * @example xx测试
     *
     * @var string
     */
    public $name;

    /**
     * @example 12132323
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'content' => 'Content',
        'creator' => 'Creator',
        'directory' => 'Directory',
        'id' => 'Id',
        'lastModifier' => 'LastModifier',
        'name' => 'Name',
        'projectId' => 'ProjectId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->directory) {
            $res['Directory'] = $this->directory;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lastModifier) {
            $res['LastModifier'] = $this->lastModifier;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Directory'])) {
            $model->directory = $map['Directory'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LastModifier'])) {
            $model->lastModifier = $map['LastModifier'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
