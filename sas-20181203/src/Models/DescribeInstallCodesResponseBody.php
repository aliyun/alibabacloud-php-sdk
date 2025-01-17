<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstallCodesResponseBody\installCodes;

class DescribeInstallCodesResponseBody extends Model
{
    /**
     * @var installCodes[]
     */
    public $installCodes;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'installCodes' => 'InstallCodes',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->installCodes)) {
            Model::validateArray($this->installCodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->installCodes) {
            if (\is_array($this->installCodes)) {
                $res['InstallCodes'] = [];
                $n1                  = 0;
                foreach ($this->installCodes as $item1) {
                    $res['InstallCodes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstallCodes'])) {
            if (!empty($map['InstallCodes'])) {
                $model->installCodes = [];
                $n1                  = 0;
                foreach ($map['InstallCodes'] as $item1) {
                    $model->installCodes[$n1++] = installCodes::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
