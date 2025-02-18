<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class UpdateEdgeContainerAppLogRiverResponseBody extends Model
{
    /**
     * @var string
     */
    public $path;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var bool
     */
    public $stdout;
    protected $_name = [
        'path'      => 'Path',
        'requestId' => 'RequestId',
        'stdout'    => 'Stdout',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->stdout) {
            $res['Stdout'] = $this->stdout;
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
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Stdout'])) {
            $model->stdout = $map['Stdout'];
        }

        return $model;
    }
}
