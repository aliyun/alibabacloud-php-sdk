<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvisorChecksResponseBody;

use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvisorChecksResponseBody\data\advisorCheck;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var advisorCheck[]
     */
    public $advisorCheck;
    protected $_name = [
        'advisorCheck' => 'AdvisorCheck',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advisorCheck) {
            $res['AdvisorCheck'] = [];
            if (null !== $this->advisorCheck && \is_array($this->advisorCheck)) {
                $n = 0;
                foreach ($this->advisorCheck as $item) {
                    $res['AdvisorCheck'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvisorCheck'])) {
            if (!empty($map['AdvisorCheck'])) {
                $model->advisorCheck = [];
                $n                   = 0;
                foreach ($map['AdvisorCheck'] as $item) {
                    $model->advisorCheck[$n++] = null !== $item ? advisorCheck::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
