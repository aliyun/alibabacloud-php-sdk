<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListJobTemplatesResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListJobTemplatesResponseBody\templates\jobTemplates;
use AlibabaCloud\Tea\Model;

class templates extends Model
{
    /**
     * @var jobTemplates[]
     */
    public $jobTemplates;
    protected $_name = [
        'jobTemplates' => 'JobTemplates',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobTemplates) {
            $res['JobTemplates'] = [];
            if (null !== $this->jobTemplates && \is_array($this->jobTemplates)) {
                $n = 0;
                foreach ($this->jobTemplates as $item) {
                    $res['JobTemplates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobTemplates'])) {
            if (!empty($map['JobTemplates'])) {
                $model->jobTemplates = [];
                $n                   = 0;
                foreach ($map['JobTemplates'] as $item) {
                    $model->jobTemplates[$n++] = null !== $item ? jobTemplates::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
