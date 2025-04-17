<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ElementContent extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var int[]
     */
    public $timeRange;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $URL;
    protected $_name = [
        'content' => 'Content',
        'timeRange' => 'TimeRange',
        'type' => 'Type',
        'URL' => 'URL',
    ];

    public function validate()
    {
        if (\is_array($this->timeRange)) {
            Model::validateArray($this->timeRange);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->timeRange) {
            if (\is_array($this->timeRange)) {
                $res['TimeRange'] = [];
                $n1 = 0;
                foreach ($this->timeRange as $item1) {
                    $res['TimeRange'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->URL) {
            $res['URL'] = $this->URL;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['TimeRange'])) {
            if (!empty($map['TimeRange'])) {
                $model->timeRange = [];
                $n1 = 0;
                foreach ($map['TimeRange'] as $item1) {
                    $model->timeRange[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['URL'])) {
            $model->URL = $map['URL'];
        }

        return $model;
    }
}
