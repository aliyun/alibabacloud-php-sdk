<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstallCodesResponseBody\installCodes;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->installCodes) {
            $res['InstallCodes'] = [];
            if (null !== $this->installCodes && \is_array($this->installCodes)) {
                $n = 0;
                foreach ($this->installCodes as $item) {
                    $res['InstallCodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstallCodesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstallCodes'])) {
            if (!empty($map['InstallCodes'])) {
                $model->installCodes = [];
                $n                   = 0;
                foreach ($map['InstallCodes'] as $item) {
                    $model->installCodes[$n++] = null !== $item ? installCodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
