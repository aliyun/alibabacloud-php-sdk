<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\CreateTagResponseBody;

use AlibabaCloud\SDK\Codeup\V20200414\Models\CreateTagResponseBody\result\commitInfo;
use AlibabaCloud\SDK\Codeup\V20200414\Models\CreateTagResponseBody\result\release;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var commitInfo
     */
    public $commitInfo;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $name;

    /**
     * @var release
     */
    public $release;
    protected $_name = [
        'commitInfo' => 'CommitInfo',
        'message'    => 'Message',
        'name'       => 'Name',
        'release'    => 'Release',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commitInfo) {
            $res['CommitInfo'] = null !== $this->commitInfo ? $this->commitInfo->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->release) {
            $res['Release'] = null !== $this->release ? $this->release->toMap() : null;
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
        if (isset($map['CommitInfo'])) {
            $model->commitInfo = commitInfo::fromMap($map['CommitInfo']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Release'])) {
            $model->release = release::fromMap($map['Release']);
        }

        return $model;
    }
}
