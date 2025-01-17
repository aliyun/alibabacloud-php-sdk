<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchPublicMediaInfoResponseBody\publicMediaInfos;

class SearchPublicMediaInfoResponseBody extends Model
{
    /**
     * @var publicMediaInfos[]
     */
    public $publicMediaInfos;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'publicMediaInfos' => 'PublicMediaInfos',
        'requestId'        => 'RequestId',
        'totalCount'       => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->publicMediaInfos)) {
            Model::validateArray($this->publicMediaInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->publicMediaInfos) {
            if (\is_array($this->publicMediaInfos)) {
                $res['PublicMediaInfos'] = [];
                $n1                      = 0;
                foreach ($this->publicMediaInfos as $item1) {
                    $res['PublicMediaInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['PublicMediaInfos'])) {
            if (!empty($map['PublicMediaInfos'])) {
                $model->publicMediaInfos = [];
                $n1                      = 0;
                foreach ($map['PublicMediaInfos'] as $item1) {
                    $model->publicMediaInfos[$n1++] = publicMediaInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
