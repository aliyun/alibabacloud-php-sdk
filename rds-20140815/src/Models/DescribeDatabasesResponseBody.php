<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponseBody\databases;
use AlibabaCloud\Tea\Model;

class DescribeDatabasesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var databases
     */
    public $databases;
    protected $_name = [
        'requestId' => 'RequestId',
        'databases' => 'Databases',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->databases) {
            $res['Databases'] = null !== $this->databases ? $this->databases->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDatabasesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Databases'])) {
            $model->databases = databases::fromMap($map['Databases']);
        }

        return $model;
    }
}
