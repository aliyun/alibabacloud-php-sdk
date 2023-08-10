<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetSortScriptFileResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The script content that is encoded in the Base64 format.
     *
     * @example YWJjZGVmZw==
     *
     * @var string
     */
    public $content;

    /**
     * @description The time when the script was created.
     *
     * @example 2020-04-02 20:21:14
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The last time when the script was last modified.
     *
     * @example 2020-04-02 21:21:14
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description The version of the script.
     *
     * @example 123456
     *
     * @var int
     */
    public $version;
    protected $_name = [
        'content'    => 'content',
        'createTime' => 'createTime',
        'modifyTime' => 'modifyTime',
        'version'    => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->modifyTime) {
            $res['modifyTime'] = $this->modifyTime;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['modifyTime'])) {
            $model->modifyTime = $map['modifyTime'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
