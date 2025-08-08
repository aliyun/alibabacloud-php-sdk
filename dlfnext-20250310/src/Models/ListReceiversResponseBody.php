<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class ListReceiversResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @var Receiver[]
     */
    public $receivers;
    protected $_name = [
        'nextPageToken' => 'nextPageToken',
        'receivers' => 'receivers',
    ];

    public function validate()
    {
        if (\is_array($this->receivers)) {
            Model::validateArray($this->receivers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextPageToken) {
            $res['nextPageToken'] = $this->nextPageToken;
        }

        if (null !== $this->receivers) {
            if (\is_array($this->receivers)) {
                $res['receivers'] = [];
                $n1 = 0;
                foreach ($this->receivers as $item1) {
                    $res['receivers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['receivers'])) {
            if (!empty($map['receivers'])) {
                $model->receivers = [];
                $n1 = 0;
                foreach ($map['receivers'] as $item1) {
                    $model->receivers[$n1] = Receiver::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
