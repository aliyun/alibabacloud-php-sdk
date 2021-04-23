<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\AddMultiRateConfigResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\AddMultiRateConfigResponseBody\body\failedTemplates;
use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @var failedTemplates[]
     */
    public $failedTemplates;
    protected $_name = [
        'failedTemplates' => 'FailedTemplates',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedTemplates) {
            $res['FailedTemplates'] = [];
            if (null !== $this->failedTemplates && \is_array($this->failedTemplates)) {
                $n = 0;
                foreach ($this->failedTemplates as $item) {
                    $res['FailedTemplates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedTemplates'])) {
            if (!empty($map['FailedTemplates'])) {
                $model->failedTemplates = [];
                $n                      = 0;
                foreach ($map['FailedTemplates'] as $item) {
                    $model->failedTemplates[$n++] = null !== $item ? failedTemplates::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
