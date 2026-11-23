<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListSecretValueResponseBody\secrets;

class ListSecretValueResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var secrets[]
     */
    public $secrets;
    protected $_name = [
        'requestId' => 'requestId',
        'secrets' => 'secrets',
    ];

    public function validate()
    {
        if (\is_array($this->secrets)) {
            Model::validateArray($this->secrets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->secrets) {
            if (\is_array($this->secrets)) {
                $res['secrets'] = [];
                $n1 = 0;
                foreach ($this->secrets as $item1) {
                    $res['secrets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['secrets'])) {
            if (!empty($map['secrets'])) {
                $model->secrets = [];
                $n1 = 0;
                foreach ($map['secrets'] as $item1) {
                    $model->secrets[$n1] = secrets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
