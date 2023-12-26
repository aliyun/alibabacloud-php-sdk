<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDirQuotasResponseBody;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDirQuotasResponseBody\dirQuotaInfos\userQuotaInfos;
use AlibabaCloud\Tea\Model;

class dirQuotaInfos extends Model
{
    /**
     * @description The inode number of the directory.
     *
     * @example 1123
     *
     * @var string
     */
    public $dirInode;

    /**
     * @description The absolute path of a directory.
     *
     * @example /data/sub1
     *
     * @var string
     */
    public $path;

    /**
     * @description The status of the quota created for the directory. Valid values: Initializing and Normal. The Initializing state indicates that the quota is being created. The Normal state indicates that the quota is created.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The information about quotas for all users.
     *
     * @var userQuotaInfos[]
     */
    public $userQuotaInfos;
    protected $_name = [
        'dirInode'       => 'DirInode',
        'path'           => 'Path',
        'status'         => 'Status',
        'userQuotaInfos' => 'UserQuotaInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dirInode) {
            $res['DirInode'] = $this->dirInode;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['DirInode'])) {
            $model->dirInode = $map['DirInode'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
