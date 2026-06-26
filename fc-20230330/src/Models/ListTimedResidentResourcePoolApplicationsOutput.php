<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class ListTimedResidentResourcePoolApplicationsOutput extends Model
{
    /**
     * @var TimedResidentResourcePoolApplication[]
     */
    public $applications;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'applications' => 'applications',
        'nextToken' => 'nextToken',
    ];

    public function validate()
    {
        if (\is_array($this->applications)) {
            Model::validateArray($this->applications);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applications) {
            if (\is_array($this->applications)) {
                $res['applications'] = [];
                $n1 = 0;
                foreach ($this->applications as $item1) {
                    $res['applications'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
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
        if (isset($map['applications'])) {
            if (!empty($map['applications'])) {
                $model->applications = [];
                $n1 = 0;
                foreach ($map['applications'] as $item1) {
                    $model->applications[$n1] = TimedResidentResourcePoolApplication::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        return $model;
    }
}
