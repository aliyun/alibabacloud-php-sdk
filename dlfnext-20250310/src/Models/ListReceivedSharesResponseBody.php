<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class ListReceivedSharesResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @var ReceivedShare[]
     */
    public $shares;
    protected $_name = [
        'nextPageToken' => 'nextPageToken',
        'shares' => 'shares',
    ];

    public function validate()
    {
        if (\is_array($this->shares)) {
            Model::validateArray($this->shares);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextPageToken) {
            $res['nextPageToken'] = $this->nextPageToken;
        }

        if (null !== $this->shares) {
            if (\is_array($this->shares)) {
                $res['shares'] = [];
                $n1 = 0;
                foreach ($this->shares as $item1) {
                    $res['shares'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['nextPageToken'])) {
            $model->nextPageToken = $map['nextPageToken'];
        }

        if (isset($map['shares'])) {
            if (!empty($map['shares'])) {
                $model->shares = [];
                $n1 = 0;
                foreach ($map['shares'] as $item1) {
                    $model->shares[$n1] = ReceivedShare::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
