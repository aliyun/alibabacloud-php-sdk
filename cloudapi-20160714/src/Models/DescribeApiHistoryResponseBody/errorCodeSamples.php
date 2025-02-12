<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody\errorCodeSamples\errorCodeSample;

class errorCodeSamples extends Model
{
    /**
     * @var errorCodeSample[]
     */
    public $errorCodeSample;
    protected $_name = [
        'errorCodeSample' => 'ErrorCodeSample',
    ];

    public function validate()
    {
        if (\is_array($this->errorCodeSample)) {
            Model::validateArray($this->errorCodeSample);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCodeSample) {
            if (\is_array($this->errorCodeSample)) {
                $res['ErrorCodeSample'] = [];
                $n1                     = 0;
                foreach ($this->errorCodeSample as $item1) {
                    $res['ErrorCodeSample'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ErrorCodeSample'])) {
            if (!empty($map['ErrorCodeSample'])) {
                $model->errorCodeSample = [];
                $n1                     = 0;
                foreach ($map['ErrorCodeSample'] as $item1) {
                    $model->errorCodeSample[$n1++] = errorCodeSample::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
