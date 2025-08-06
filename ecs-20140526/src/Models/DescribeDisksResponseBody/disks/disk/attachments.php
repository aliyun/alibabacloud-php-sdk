<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksResponseBody\disks\disk;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksResponseBody\disks\disk\attachments\attachment;

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
        if (\is_array($this->attachment)) {
            Model::validateArray($this->attachment);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachment) {
            if (\is_array($this->attachment)) {
                $res['Attachment'] = [];
                $n1 = 0;
                foreach ($this->attachment as $item1) {
                    $res['Attachment'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Attachment'])) {
            if (!empty($map['Attachment'])) {
                $model->attachment = [];
                $n1 = 0;
                foreach ($map['Attachment'] as $item1) {
                    $model->attachment[$n1] = attachment::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
