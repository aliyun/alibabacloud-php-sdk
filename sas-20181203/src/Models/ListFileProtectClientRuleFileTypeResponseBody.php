<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListFileProtectClientRuleFileTypeResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $fileTypes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fileTypes' => 'FileTypes',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->fileTypes)) {
            Model::validateArray($this->fileTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileTypes) {
            if (\is_array($this->fileTypes)) {
                $res['FileTypes'] = [];
                $n1 = 0;
                foreach ($this->fileTypes as $item1) {
                    $res['FileTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['FileTypes'])) {
            if (!empty($map['FileTypes'])) {
                $model->fileTypes = [];
                $n1 = 0;
                foreach ($map['FileTypes'] as $item1) {
                    $model->fileTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
