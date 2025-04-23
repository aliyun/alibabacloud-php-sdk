<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetPostScriptsResponseBody\postInstallScripts;

class GetPostScriptsResponseBody extends Model
{
    /**
     * @var postInstallScripts[]
     */
    public $postInstallScripts;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'postInstallScripts' => 'PostInstallScripts',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->postInstallScripts)) {
            Model::validateArray($this->postInstallScripts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->postInstallScripts) {
            if (\is_array($this->postInstallScripts)) {
                $res['PostInstallScripts'] = [];
                $n1 = 0;
                foreach ($this->postInstallScripts as $item1) {
                    $res['PostInstallScripts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PostInstallScripts'])) {
            if (!empty($map['PostInstallScripts'])) {
                $model->postInstallScripts = [];
                $n1 = 0;
                foreach ($map['PostInstallScripts'] as $item1) {
                    $model->postInstallScripts[$n1++] = postInstallScripts::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
