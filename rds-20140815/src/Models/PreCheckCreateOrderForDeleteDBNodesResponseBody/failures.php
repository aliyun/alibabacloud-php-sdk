<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\PreCheckCreateOrderForDeleteDBNodesResponseBody;

use AlibabaCloud\Tea\Model;

class failures extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Rds\V20140815\Models\PreCheckCreateOrderForDeleteDBNodesResponseBody\failures\failures[]
     */
    public $failures;
    protected $_name = [
        'failures' => 'Failures',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failures) {
            $res['Failures'] = [];
            if (null !== $this->failures && \is_array($this->failures)) {
                $n = 0;
                foreach ($this->failures as $item) {
                    $res['Failures'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failures
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Failures'])) {
            if (!empty($map['Failures'])) {
                $model->failures = [];
                $n               = 0;
                foreach ($map['Failures'] as $item) {
                    $model->failures[$n++] = null !== $item ? \AlibabaCloud\SDK\Rds\V20140815\Models\PreCheckCreateOrderForDeleteDBNodesResponseBody\failures\failures::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
