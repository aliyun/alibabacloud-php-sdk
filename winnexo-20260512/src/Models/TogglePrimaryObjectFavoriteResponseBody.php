<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\TogglePrimaryObjectFavoriteResponseBody\results;

class TogglePrimaryObjectFavoriteResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $favoriteCount;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var results[]
     */
    public $results;
    protected $_name = [
        'code' => 'code',
        'favoriteCount' => 'favoriteCount',
        'message' => 'message',
        'requestId' => 'requestId',
        'results' => 'results',
    ];

    public function validate()
    {
        if (\is_array($this->results)) {
            Model::validateArray($this->results);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->favoriteCount) {
            $res['favoriteCount'] = $this->favoriteCount;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->results) {
            if (\is_array($this->results)) {
                $res['results'] = [];
                $n1 = 0;
                foreach ($this->results as $item1) {
                    $res['results'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['favoriteCount'])) {
            $model->favoriteCount = $map['favoriteCount'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['results'])) {
            if (!empty($map['results'])) {
                $model->results = [];
                $n1 = 0;
                foreach ($map['results'] as $item1) {
                    $model->results[$n1] = results::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
