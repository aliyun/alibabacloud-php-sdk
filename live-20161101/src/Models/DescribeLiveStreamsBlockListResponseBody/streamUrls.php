<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsBlockListResponseBody;

use AlibabaCloud\Dara\Model;

class streamUrls extends Model
{
    /**
     * @var string[]
     */
    public $streamUrl;
    protected $_name = [
        'streamUrl' => 'StreamUrl',
    ];

    public function validate()
    {
        if (\is_array($this->streamUrl)) {
            Model::validateArray($this->streamUrl);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->streamUrl) {
            if (\is_array($this->streamUrl)) {
                $res['StreamUrl'] = [];
                $n1 = 0;
                foreach ($this->streamUrl as $item1) {
                    $res['StreamUrl'][$n1] = $item1;
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
        if (isset($map['StreamUrl'])) {
            if (!empty($map['StreamUrl'])) {
                $model->streamUrl = [];
                $n1 = 0;
                foreach ($map['StreamUrl'] as $item1) {
                    $model->streamUrl[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
