<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class DescribeApisecSlsProjectsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $projects;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'projects' => 'Projects',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->projects)) {
            Model::validateArray($this->projects);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->projects) {
            if (\is_array($this->projects)) {
                $res['Projects'] = [];
                $n1 = 0;
                foreach ($this->projects as $item1) {
                    $res['Projects'][$n1++] = $item1;
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
        if (isset($map['Projects'])) {
            if (!empty($map['Projects'])) {
                $model->projects = [];
                $n1 = 0;
                foreach ($map['Projects'] as $item1) {
                    $model->projects[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
