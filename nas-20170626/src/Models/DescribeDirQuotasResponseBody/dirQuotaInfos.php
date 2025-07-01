<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDirQuotasResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDirQuotasResponseBody\dirQuotaInfos\userQuotaInfos;

class dirQuotaInfos extends Model
{
    /**
     * @var string
     */
    public $dirInode;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $status;

    /**
     * @var userQuotaInfos[]
     */
    public $userQuotaInfos;
    protected $_name = [
        'dirInode' => 'DirInode',
        'path' => 'Path',
        'status' => 'Status',
        'userQuotaInfos' => 'UserQuotaInfos',
    ];

    public function validate()
    {
        if (\is_array($this->userQuotaInfos)) {
            Model::validateArray($this->userQuotaInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->userQuotaInfos)) {
                $res['UserQuotaInfos'] = [];
                $n1 = 0;
                foreach ($this->userQuotaInfos as $item1) {
                    $res['UserQuotaInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['UserQuotaInfos'] as $item1) {
                    $model->userQuotaInfos[$n1] = userQuotaInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
