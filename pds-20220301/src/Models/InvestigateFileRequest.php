<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\SDK\Pds\V20220301\Models\InvestigateFileRequest\driveFileIds;
use AlibabaCloud\Tea\Model;

class InvestigateFileRequest extends Model
{
    /**
     * @var driveFileIds[]
     */
    public $driveFileIds;
    protected $_name = [
        'driveFileIds' => 'drive_file_ids',
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

        return $model;
    }
}
