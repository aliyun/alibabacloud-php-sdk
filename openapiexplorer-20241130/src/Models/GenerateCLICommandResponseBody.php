<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models;

use AlibabaCloud\Dara\Model;

class GenerateCLICommandResponseBody extends Model
{
    /**
     * @var string
     */
    public $cli;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cli' => 'cli',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cli) {
            $res['cli'] = $this->cli;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['cli'])) {
            $model->cli = $map['cli'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
