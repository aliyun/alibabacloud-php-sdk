<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiagnosticReportsResponseBody\reports\report;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiagnosticReportsResponseBody\reports\report\issues\issue;
use AlibabaCloud\Tea\Model;

class issues extends Model
{
    /**
     * @var issue[]
     */
    public $issue;
    protected $_name = [
        'issue' => 'Issue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->issue) {
            $res['Issue'] = [];
            if (null !== $this->issue && \is_array($this->issue)) {
                $n = 0;
                foreach ($this->issue as $item) {
                    $res['Issue'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return issues
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Issue'])) {
            if (!empty($map['Issue'])) {
                $model->issue = [];
                $n            = 0;
                foreach ($map['Issue'] as $item) {
                    $model->issue[$n++] = null !== $item ? issue::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
