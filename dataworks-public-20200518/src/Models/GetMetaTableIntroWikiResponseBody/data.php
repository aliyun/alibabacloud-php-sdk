<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableIntroWikiResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The description of the metatable.
     *
     * @example \\# Business requirements\\n\\n\\&lt;a name=\\&quot;xiw5n\\&quot;
     *
     * @var string
     */
    public $content;

    /**
     * @description The time when the metatable was created.
     *
     * @example 1584444247000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The creator of the metatable.
     *
     * @example abc
     *
     * @var string
     */
    public $creator;

    /**
     * @description The name of the user who creates the metatable.
     *
     * @example abc
     *
     * @var string
     */
    public $creatorName;

    /**
     * @description The time when the metatable was last modified.
     *
     * @example 1584444247000
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @description The version number.
     *
     * @example 1
     *
     * @var int
     */
    public $version;
    protected $_name = [
        'content'      => 'Content',
        'createTime'   => 'CreateTime',
        'creator'      => 'Creator',
        'creatorName'  => 'CreatorName',
        'modifiedTime' => 'ModifiedTime',
        'version'      => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
