<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateDeployRevisionResponseBody\revision;

class CreateDeployRevisionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var revision
     */
    public $revision;
    protected $_name = [
        'requestId' => 'RequestId',
        'revision' => 'Revision',
    ];

    public function validate()
    {
        if (null !== $this->revision) {
            $this->revision->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->revision) {
            $res['Revision'] = null !== $this->revision ? $this->revision->toArray($noStream) : $this->revision;
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

        if (isset($map['Revision'])) {
            $model->revision = revision::fromMap($map['Revision']);
        }

        return $model;
    }
}
