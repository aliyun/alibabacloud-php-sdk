<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\AddKnowledgeTagsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\AddKnowledgeTagsResponseBody\data\skipped;

class data extends Model
{
    /**
     * @var string
     */
    public $fileLocation;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $replaced;

    /**
     * @var skipped[]
     */
    public $skipped;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $written;
    protected $_name = [
        'fileLocation' => 'FileLocation',
        'message' => 'Message',
        'replaced' => 'Replaced',
        'skipped' => 'Skipped',
        'success' => 'Success',
        'written' => 'Written',
    ];

    public function validate()
    {
        if (\is_array($this->skipped)) {
            Model::validateArray($this->skipped);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileLocation) {
            $res['FileLocation'] = $this->fileLocation;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->replaced) {
            $res['Replaced'] = $this->replaced;
        }

        if (null !== $this->skipped) {
            if (\is_array($this->skipped)) {
                $res['Skipped'] = [];
                $n1 = 0;
                foreach ($this->skipped as $item1) {
                    $res['Skipped'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->written) {
            $res['Written'] = $this->written;
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
        if (isset($map['FileLocation'])) {
            $model->fileLocation = $map['FileLocation'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Replaced'])) {
            $model->replaced = $map['Replaced'];
        }

        if (isset($map['Skipped'])) {
            if (!empty($map['Skipped'])) {
                $model->skipped = [];
                $n1 = 0;
                foreach ($map['Skipped'] as $item1) {
                    $model->skipped[$n1] = skipped::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['Written'])) {
            $model->written = $map['Written'];
        }

        return $model;
    }
}
