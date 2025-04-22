<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pds\V20220301\Models\InvestigateFileRequest\driveFileIds;

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
        if (\is_array($this->driveFileIds)) {
            Model::validateArray($this->driveFileIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->driveFileIds) {
            if (\is_array($this->driveFileIds)) {
                $res['drive_file_ids'] = [];
                $n1 = 0;
                foreach ($this->driveFileIds as $item1) {
                    $res['drive_file_ids'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['drive_file_ids'])) {
            if (!empty($map['drive_file_ids'])) {
                $model->driveFileIds = [];
                $n1 = 0;
                foreach ($map['drive_file_ids'] as $item1) {
                    $model->driveFileIds[$n1++] = driveFileIds::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
