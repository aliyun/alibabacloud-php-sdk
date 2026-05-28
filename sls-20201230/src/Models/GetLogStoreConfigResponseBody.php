<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class GetLogStoreConfigResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $clientIpHeaders;
    protected $_name = [
        'clientIpHeaders' => 'clientIpHeaders',
    ];

    public function validate()
    {
        if (\is_array($this->clientIpHeaders)) {
            Model::validateArray($this->clientIpHeaders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientIpHeaders) {
            if (\is_array($this->clientIpHeaders)) {
                $res['clientIpHeaders'] = [];
                $n1 = 0;
                foreach ($this->clientIpHeaders as $item1) {
                    $res['clientIpHeaders'][$n1] = $item1;
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
        if (isset($map['clientIpHeaders'])) {
            if (!empty($map['clientIpHeaders'])) {
                $model->clientIpHeaders = [];
                $n1 = 0;
                foreach ($map['clientIpHeaders'] as $item1) {
                    $model->clientIpHeaders[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
