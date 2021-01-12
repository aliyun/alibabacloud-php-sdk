<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterTemplatesResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterTemplatesResponseBody\parameters\templateRecord;
use AlibabaCloud\Tea\Model;

class parameters extends Model
{
    /**
     * @var templateRecord[]
     */
    public $templateRecord;
    protected $_name = [
        'templateRecord' => 'TemplateRecord',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateRecord) {
            $res['TemplateRecord'] = [];
            if (null !== $this->templateRecord && \is_array($this->templateRecord)) {
                $n = 0;
                foreach ($this->templateRecord as $item) {
                    $res['TemplateRecord'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateRecord'])) {
            if (!empty($map['TemplateRecord'])) {
                $model->templateRecord = [];
                $n                     = 0;
                foreach ($map['TemplateRecord'] as $item) {
                    $model->templateRecord[$n++] = null !== $item ? templateRecord::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
