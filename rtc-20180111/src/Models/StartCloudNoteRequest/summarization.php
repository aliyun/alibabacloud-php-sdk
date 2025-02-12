<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest;

use AlibabaCloud\Dara\Model;

class summarization extends Model
{
    /**
     * @var bool
     */
    public $enabled;
    /**
     * @var string[]
     */
    public $type;
    protected $_name = [
        'enabled' => 'Enabled',
        'type'    => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->type)) {
            Model::validateArray($this->type);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->type) {
            if (\is_array($this->type)) {
                $res['Type'] = [];
                $n1          = 0;
                foreach ($this->type as $item1) {
                    $res['Type'][$n1++] = $item1;
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
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['Type'])) {
            if (!empty($map['Type'])) {
                $model->type = [];
                $n1          = 0;
                foreach ($map['Type'] as $item1) {
                    $model->type[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
