<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDirQuotasResponseBody;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDirQuotasResponseBody\dirQuotaInfos\userQuotaInfos;
use AlibabaCloud\Tea\Model;

class dirQuotaInfos extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $dirInode;

    /**
     * @var userQuotaInfos[]
     */
    public $userQuotaInfos;
    protected $_name = [
        'status'         => 'Status',
        'path'           => 'Path',
        'dirInode'       => 'DirInode',
        'userQuotaInfos' => 'UserQuotaInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->dirInode) {
            $res['DirInode'] = $this->dirInode;
        }
        if (null !== $this->userQuotaInfos) {
            $res['UserQuotaInfos'] = [];
            if (null !== $this->userQuotaInfos && \is_array($this->userQuotaInfos)) {
                $n = 0;
                foreach ($this->userQuotaInfos as $item) {
                    $res['UserQuotaInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dirQuotaInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['DirInode'])) {
            $model->dirInode = $map['DirInode'];
        }
        if (isset($map['UserQuotaInfos'])) {
            if (!empty($map['UserQuotaInfos'])) {
                $model->userQuotaInfos = [];
                $n                     = 0;
                foreach ($map['UserQuotaInfos'] as $item) {
                    $model->userQuotaInfos[$n++] = null !== $item ? userQuotaInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
