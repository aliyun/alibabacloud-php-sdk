<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ListTransferFileDownloadUrlResponseBody\urls;

class ListTransferFileDownloadUrlResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var urls[]
     */
    public $urls;
    protected $_name = [
        'requestId' => 'RequestId',
        'urls' => 'Urls',
    ];

    public function validate()
    {
        if (\is_array($this->urls)) {
            Model::validateArray($this->urls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->urls) {
            if (\is_array($this->urls)) {
                $res['Urls'] = [];
                $n1 = 0;
                foreach ($this->urls as $item1) {
                    $res['Urls'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Urls'])) {
            if (!empty($map['Urls'])) {
                $model->urls = [];
                $n1 = 0;
                foreach ($map['Urls'] as $item1) {
                    $model->urls[$n1] = urls::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
