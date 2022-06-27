<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiagnosisDimensionsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $databases;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $userNames;
    protected $_name = [
        'databases' => 'Databases',
        'requestId' => 'RequestId',
        'userNames' => 'UserNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databases) {
            $res['Databases'] = $this->databases;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userNames) {
            $res['UserNames'] = $this->userNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiagnosisDimensionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Databases'])) {
            if (!empty($map['Databases'])) {
                $model->databases = $map['Databases'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserNames'])) {
            if (!empty($map['UserNames'])) {
                $model->userNames = $map['UserNames'];
            }
        }

        return $model;
    }
}
