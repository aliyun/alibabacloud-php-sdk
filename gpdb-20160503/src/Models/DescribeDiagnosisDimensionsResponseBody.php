<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->databases)) {
            Model::validateArray($this->databases);
        }
        if (\is_array($this->userNames)) {
            Model::validateArray($this->userNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databases) {
            if (\is_array($this->databases)) {
                $res['Databases'] = [];
                $n1               = 0;
                foreach ($this->databases as $item1) {
                    $res['Databases'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userNames) {
            if (\is_array($this->userNames)) {
                $res['UserNames'] = [];
                $n1               = 0;
                foreach ($this->userNames as $item1) {
                    $res['UserNames'][$n1++] = $item1;
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
        if (isset($map['Databases'])) {
            if (!empty($map['Databases'])) {
                $model->databases = [];
                $n1               = 0;
                foreach ($map['Databases'] as $item1) {
                    $model->databases[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UserNames'])) {
            if (!empty($map['UserNames'])) {
                $model->userNames = [];
                $n1               = 0;
                foreach ($map['UserNames'] as $item1) {
                    $model->userNames[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
