<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\SDK\Pds\V20220301\Models\InvestigateFileRequest\driveFileIds;
use AlibabaCloud\SDK\Pds\V20220301\Models\InvestigateFileRequest\policy;
use AlibabaCloud\Tea\Model;

class InvestigateFileRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var driveFileIds[]
     */
    public $driveFileIds;

    /**
     * @var policy
     */
    public $policy;

    /**
     * @var bool
     */
    public $recursive;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'driveFileIds' => 'drive_file_ids',
        'policy'       => 'policy',
        'recursive'    => 'recursive',
        'userData'     => 'user_data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->driveFileIds) {
            $res['drive_file_ids'] = [];
            if (null !== $this->driveFileIds && \is_array($this->driveFileIds)) {
                $n = 0;
                foreach ($this->driveFileIds as $item) {
                    $res['drive_file_ids'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->policy) {
            $res['policy'] = null !== $this->policy ? $this->policy->toMap() : null;
        }
        if (null !== $this->recursive) {
            $res['recursive'] = $this->recursive;
        }
        if (null !== $this->userData) {
            $res['user_data'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InvestigateFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['drive_file_ids'])) {
            if (!empty($map['drive_file_ids'])) {
                $model->driveFileIds = [];
                $n                   = 0;
                foreach ($map['drive_file_ids'] as $item) {
                    $model->driveFileIds[$n++] = null !== $item ? driveFileIds::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['policy'])) {
            $model->policy = policy::fromMap($map['policy']);
        }
        if (isset($map['recursive'])) {
            $model->recursive = $map['recursive'];
        }
        if (isset($map['user_data'])) {
            $model->userData = $map['user_data'];
        }

        return $model;
    }
}
