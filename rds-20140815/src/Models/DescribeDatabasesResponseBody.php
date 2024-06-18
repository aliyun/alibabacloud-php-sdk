<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponseBody\databases;
use AlibabaCloud\Tea\Model;

class DescribeDatabasesResponseBody extends Model
{
    /**
     * @description The information about the databases.
     *
     * @var databases
     */
    public $databases;

    /**
     * @description The ID of the request.
     *
     * @example 2603CA96-B17D-4903-BC04-61A2C829CD94
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'databases' => 'Databases',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databases) {
            $res['Databases'] = null !== $this->databases ? $this->databases->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Databases'])) {
            $model->databases = databases::fromMap($map['Databases']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
