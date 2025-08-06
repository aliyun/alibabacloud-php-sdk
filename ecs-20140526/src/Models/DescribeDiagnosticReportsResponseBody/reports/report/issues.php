<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiagnosticReportsResponseBody\reports\report;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiagnosticReportsResponseBody\reports\report\issues\issue;

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
        if (\is_array($this->issue)) {
            Model::validateArray($this->issue);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->issue) {
            if (\is_array($this->issue)) {
                $res['Issue'] = [];
                $n1 = 0;
                foreach ($this->issue as $item1) {
                    $res['Issue'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Issue'])) {
            if (!empty($map['Issue'])) {
                $model->issue = [];
                $n1 = 0;
                foreach ($map['Issue'] as $item1) {
                    $model->issue[$n1] = issue::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
