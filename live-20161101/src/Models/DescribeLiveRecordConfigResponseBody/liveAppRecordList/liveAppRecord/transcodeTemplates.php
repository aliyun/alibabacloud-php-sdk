<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordConfigResponseBody\liveAppRecordList\liveAppRecord;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templates) {
            $res['Templates'] = $this->templates;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcodeTemplates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Templates'])) {
            if (!empty($map['Templates'])) {
                $model->templates = $map['Templates'];
            }
        }

        return $model;
    }
}
