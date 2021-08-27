<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksResponseBody\disks\disk;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksResponseBody\disks\disk\attachments\attachment;
use AlibabaCloud\Tea\Model;

class attachments extends Model
{
    /**
     * @var attachment[]
     */
    public $attachment;
    protected $_name = [
        'attachment' => 'Attachment',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachment) {
            $res['Attachment'] = [];
            if (null !== $this->attachment && \is_array($this->attachment)) {
                $n = 0;
                foreach ($this->attachment as $item) {
                    $res['Attachment'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attachments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attachment'])) {
            if (!empty($map['Attachment'])) {
                $model->attachment = [];
                $n                 = 0;
                foreach ($map['Attachment'] as $item) {
                    $model->attachment[$n++] = null !== $item ? attachment::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
