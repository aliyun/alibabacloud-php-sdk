<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeModifyParameterLogResponseBody\changelogs;

class DescribeModifyParameterLogResponseBody extends Model
{
    /**
     * @var changelogs[]
     */
    public $changelogs;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'changelogs' => 'Changelogs',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->changelogs)) {
            Model::validateArray($this->changelogs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changelogs) {
            if (\is_array($this->changelogs)) {
                $res['Changelogs'] = [];
                $n1                = 0;
                foreach ($this->changelogs as $item1) {
                    $res['Changelogs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Changelogs'])) {
            if (!empty($map['Changelogs'])) {
                $model->changelogs = [];
                $n1                = 0;
                foreach ($map['Changelogs'] as $item1) {
                    $model->changelogs[$n1++] = changelogs::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
