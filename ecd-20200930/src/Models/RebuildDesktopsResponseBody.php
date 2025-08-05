<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RebuildDesktopsResponseBody\rebuildResults;

class RebuildDesktopsResponseBody extends Model
{
    /**
     * @var rebuildResults[]
     */
    public $rebuildResults;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'rebuildResults' => 'RebuildResults',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->rebuildResults)) {
            Model::validateArray($this->rebuildResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rebuildResults) {
            if (\is_array($this->rebuildResults)) {
                $res['RebuildResults'] = [];
                $n1 = 0;
                foreach ($this->rebuildResults as $item1) {
                    $res['RebuildResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['RebuildResults'])) {
            if (!empty($map['RebuildResults'])) {
                $model->rebuildResults = [];
                $n1 = 0;
                foreach ($map['RebuildResults'] as $item1) {
                    $model->rebuildResults[$n1] = rebuildResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
