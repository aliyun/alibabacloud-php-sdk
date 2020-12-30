<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\CreateTagResponseBody;

use AlibabaCloud\SDK\Codeup\V20200414\Models\CreateTagResponseBody\result\commitInfo;
use AlibabaCloud\SDK\Codeup\V20200414\Models\CreateTagResponseBody\result\release;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var release
     */
    public $release;

    /**
     * @var string
     */
    public $message;

    /**
     * @var commitInfo
     */
    public $commitInfo;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'release'    => 'Release',
        'message'    => 'Message',
        'commitInfo' => 'CommitInfo',
        'name'       => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->release) {
            $res['Release'] = null !== $this->release ? $this->release->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->commitInfo) {
            $res['CommitInfo'] = null !== $this->commitInfo ? $this->commitInfo->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Release'])) {
            $model->release = release::fromMap($map['Release']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['CommitInfo'])) {
            $model->commitInfo = commitInfo::fromMap($map['CommitInfo']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
