<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListNodeInfosForPodResponseBody\content;

class ListNodeInfosForPodResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @var int
     */
    public $code;

    /**
     * @var content[]
     */
    public $content;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'code' => 'Code',
        'content' => 'Content',
        'message' => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->content)) {
            Model::validateArray($this->content);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->content) {
            if (\is_array($this->content)) {
                $res['Content'] = [];
                $n1 = 0;
                foreach ($this->content as $item1) {
                    $res['Content'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Content'])) {
            if (!empty($map['Content'])) {
                $model->content = [];
                $n1 = 0;
                foreach ($map['Content'] as $item1) {
                    $model->content[$n1] = content::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
