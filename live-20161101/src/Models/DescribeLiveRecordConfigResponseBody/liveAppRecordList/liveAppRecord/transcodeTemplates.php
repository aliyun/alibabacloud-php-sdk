<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordConfigResponseBody\liveAppRecordList\liveAppRecord;

use AlibabaCloud\Dara\Model;

class transcodeTemplates extends Model
{
    /**
     * @var string[]
     */
    public $templates;
    protected $_name = [
        'templates' => 'Templates',
    ];

    public function validate()
    {
        if (\is_array($this->templates)) {
            Model::validateArray($this->templates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->templates) {
            if (\is_array($this->templates)) {
                $res['Templates'] = [];
                $n1 = 0;
                foreach ($this->templates as $item1) {
                    $res['Templates'][$n1] = $item1;
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
        if (isset($map['Templates'])) {
            if (!empty($map['Templates'])) {
                $model->templates = [];
                $n1 = 0;
                foreach ($map['Templates'] as $item1) {
                    $model->templates[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
