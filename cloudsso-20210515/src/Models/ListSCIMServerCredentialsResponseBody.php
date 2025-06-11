<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListSCIMServerCredentialsResponseBody\SCIMServerCredentials;

class ListSCIMServerCredentialsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var SCIMServerCredentials[]
     */
    public $SCIMServerCredentials;

    /**
     * @var int
     */
    public $totalCounts;
    protected $_name = [
        'requestId' => 'RequestId',
        'SCIMServerCredentials' => 'SCIMServerCredentials',
        'totalCounts' => 'TotalCounts',
    ];

    public function validate()
    {
        if (\is_array($this->SCIMServerCredentials)) {
            Model::validateArray($this->SCIMServerCredentials);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->SCIMServerCredentials) {
            if (\is_array($this->SCIMServerCredentials)) {
                $res['SCIMServerCredentials'] = [];
                $n1 = 0;
                foreach ($this->SCIMServerCredentials as $item1) {
                    $res['SCIMServerCredentials'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCounts) {
            $res['TotalCounts'] = $this->totalCounts;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SCIMServerCredentials'])) {
            if (!empty($map['SCIMServerCredentials'])) {
                $model->SCIMServerCredentials = [];
                $n1 = 0;
                foreach ($map['SCIMServerCredentials'] as $item1) {
                    $model->SCIMServerCredentials[$n1++] = SCIMServerCredentials::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCounts'])) {
            $model->totalCounts = $map['TotalCounts'];
        }

        return $model;
    }
}
