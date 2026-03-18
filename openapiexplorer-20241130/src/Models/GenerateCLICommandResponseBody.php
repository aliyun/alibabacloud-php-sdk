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

    /**
     * @var string
     */
    public $unifiedCli;
    protected $_name = [
        'cli' => 'cli',
        'requestId' => 'requestId',
        'unifiedCli' => 'unifiedCli',
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

        if (null !== $this->unifiedCli) {
            $res['unifiedCli'] = $this->unifiedCli;
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

        if (isset($map['unifiedCli'])) {
            $model->unifiedCli = $map['unifiedCli'];
        }

        return $model;
    }
}
