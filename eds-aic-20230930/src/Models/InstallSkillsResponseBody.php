<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\InstallSkillsResponseBody\installResults;

class InstallSkillsResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var installResults[]
     */
    public $installResults;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'Code',
        'installResults' => 'InstallResults',
        'message' => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->installResults)) {
            Model::validateArray($this->installResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->installResults) {
            if (\is_array($this->installResults)) {
                $res['InstallResults'] = [];
                $n1 = 0;
                foreach ($this->installResults as $item1) {
                    $res['InstallResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['InstallResults'])) {
            if (!empty($map['InstallResults'])) {
                $model->installResults = [];
                $n1 = 0;
                foreach ($map['InstallResults'] as $item1) {
                    $model->installResults[$n1] = installResults::fromMap($item1);
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
