<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\GetPostScriptsResponseBody\postInstallScripts;
use AlibabaCloud\Tea\Model;

class GetPostScriptsResponseBody extends Model
{
    /**
     * @description The post-installation scripts.
     *
     * @var postInstallScripts[]
     */
    public $postInstallScripts;

    /**
     * @description The request ID.
     *
     * @example B745C159-3155-4B94-95D0-4B73D4D2****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'postInstallScripts' => 'PostInstallScripts',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->postInstallScripts) {
            $res['PostInstallScripts'] = [];
            if (null !== $this->postInstallScripts && \is_array($this->postInstallScripts)) {
                $n = 0;
                foreach ($this->postInstallScripts as $item) {
                    $res['PostInstallScripts'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return GetPostScriptsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PostInstallScripts'])) {
            if (!empty($map['PostInstallScripts'])) {
                $model->postInstallScripts = [];
                $n                         = 0;
                foreach ($map['PostInstallScripts'] as $item) {
                    $model->postInstallScripts[$n++] = null !== $item ? postInstallScripts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
